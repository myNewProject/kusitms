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

    function get_current_member() {
        $strQuery = "SELECT member FROM users ORDER BY member DESC LIMIT 1";

        return $this->db->query($strQuery)->result();
    }
 
    function get_member ($seq){
         $strQuery = "SELECT id, name, university, email, class, ment FROM users WHERE class in('학회장', '부학회장', '교육팀장', '경영총괄팀장', '대외홍보팀장') AND member = ".$seq;
 
        return $this->db->query($strQuery)->result();
    }

    function get_name($id) {
        $strQuery = "SELECT name FROM users WHERE id = ".$id;
 
        return $this->db->query($strQuery)->result();
    }

    function get_man_member($id) {
        $strQuery = "SELECT member FROM users WHERE id = ".$id;
 
        return $this->db->query($strQuery)->result();
    }    
 
    function get2($seq){ 
		$this->db->select('seq');
		$this->db->select('title');
		$this->db->select('contents');
		$this->db->select('UNIX_TIMESTAMP(regdate) AS created');
        return $this->db->get_where('about_us',array('seq'=>$seq))->row();
    }
	
    function add($option) {
        $this->db->set('name', $option['name']);
        $this->db->set('pass', $option['password']);
        $this->db->set('university', $option['university']);
        $this->db->set('email', $option['email']);
        $this->db->set('class', $option['class']);
        $this->db->set('phone', $option['phone']);
        $this->db->set('ment', $option['ment']);
        $this->db->set('member', $option['member']);
        $this->db->set('picture', $option['picture']);
        $this->db->set('age', $option['age']);
        $this->db->insert('users');
        $result = $this->db->insert_id();
        return $result;
    }

    function getByEmail($option) {
        $result = $this->db->get_where('users', array('email'=>$option['email']))->row();
        return $result;
    }
 
}
?>
