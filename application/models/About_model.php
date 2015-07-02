<?php
class About_model extends CI_Model{
 
    function __construct()
    {
        parent::__construct();
    }
 
    function gets($category){
        $strQuery = "SELECT id, title, substring(content, 1, 255) as content, writer, postDate FROM about_us WHERE category = ".$category." ORDER BY id DESC LIMIT 4";

        return $this->db->query($strQuery)->result();
    }

    function getBoard($category){
        $strQuery = "SELECT id, category, title, writer, postDate, click FROM about_us WHERE category = ".$category." ORDER BY id DESC";

        return $this->db->query($strQuery)->result();
    }

    function getAll($category){
        $strQuery = "SELECT id, title, content, writer, postDate FROM about_us WHERE category = ".$category." ORDER BY id DESC";

        return $this->db->query($strQuery)->result();
    }

    function add($category, $title, $content, $writer) {
 //   function add($category, $title, $content) {
        $this->db->set('postDate', 'CURRENT_TIMESTAMP()', false);
        $this->db->insert('about_us', array(
            'category'=>$category,
            'title'=>$title,
            'content'=>$content,
            'writer'=>$writer
        ));
        
        return $this->db->insert_id();
    }

    function addFile($category, $title, $content, $writer, $attachment_org, $attachment_file) {
//    function addFile($category, $title, $content, $attachment_org, $attachment_file) {
        $this->db->set('postDate', 'CURRENT_TIMESTAMP()', false);
        $this->db->insert('about_us', array(
            'category'=>$category,
            'title'=>$title,
            'content'=>$content,
            'writer'=>$writer,
            'attachment_org'=>$attachment_org,
            'attachment_file'=>$attachment_file
        ));
        
        return $this->db->insert_id();
    }
 
}
?>
