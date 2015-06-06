<?php
class Notice_model extends CI_Model{
 
    function __construct()
    {
        parent::__construct();
    }
 
    function gets($category){
        $strQuery = "SELECT id, title, content, writer, postDate FROM notice_board WHERE category = ".$category." ORDER BY id DESC";

        return $this->db->query($strQuery)->result();
    }

    function add($category, $title, $content, $writer) {
        $this->db->set('postDate', 'CURRENT_TIMESTAMP()', false);
        $this->db->insert('notice_board', array(
            'category'=>$category,
            'title'=>$title,
            'content'=>$content,
            'writer'=>$writer
        ));
        
        return $this->db->insert_id();
    }
 
}
?>
