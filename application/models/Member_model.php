<?php
class Member_model extends CI_Model{
 
    function __construct()
    {
        parent::__construct();
    }
 
    function gets(){
        $strQuery = "SELECT id, name, university, email, class, ment FROM users WHERE class in('학회장', '부학회장', '교육팀장', '경영총괄팀장', '대외홍보팀장') AND member =(SELECT MAX(member) FROM users)";
 
        return $this->db->query($strQuery)->result();
    }
 
    function get_member ($seq){
         $strQuery = "SELECT id, name, university, email, class, ment FROM users WHERE class in('학회장', '부학회장', '교육팀장', '경영총괄팀장', '대외홍보팀장') AND member = ".$seq;
 
        return $this->db->query($strQuery)->result();
    }
 
    function get2($seq){ 
		$this->db->select('seq');
		$this->db->select('title');
		$this->db->select('contents');
		$this->db->select('UNIX_TIMESTAMP(regdate) AS created');
        return $this->db->get_where('about_us',array('seq'=>$seq))->row();
    }
	
	function add($title, $description) {
		$this->db->set('regdate', 'NOW()', false);
		$this->db->insert('about_us', array(
			'title'=>$title,
			'contents'=>$description
		));
		
		return $this->db->insert_id();
	}
 
}
?>
