<?php
class Faq {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function Question() {
        $this->db->query('SELECT * FROM faq_questions ');
        return $faq_questions=$this->db->resultSet();

    }
    public function addQuestion($data){
        $this->db->query('INSERT INTO faq_questions (id,supervisor_id,title,answer,subject,visible) VALUES (:id,:supervisor_id,:title,:answer,:subject,:visible)');
        $this->db->bind('id', $data['id']);
        $this->db->bind('supervisor_id', $data['supervisor_id']);
        $this->db->bind('title', $data['title']);
        $this->db->bind('answer', $data['answer']);
        $this->db->bind('subject', $data['subject']);
        if($data['visible']==='0' || !empty($data['visible'])){
            $this->db->bind('visible', $data['visible']);
        }
        else{
            $this->db->bind('visible', 1); 
        }

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function removeQuestion($id){
        $this->db->query('DELETE FROM faq_questions WHERE id = :id');
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function modifQuestion($id){
        $this->db->query('SELECT * FROM faq_questions WHERE id= :id');
        $this->db->bind(':id',$id);
        return $question=$this->db->resultSet();


    }

    public function QuestionVisible() {
        $this->db->query('SELECT * FROM faq_questions WHERE visible=1 ');
        return $faq_invisible=$this->db->resultSet();

    }

   
    public function uneQuestion($id) {
        $this->db->query('SELECT * FROM faq_questions WHERE id= :id');
        $this->db->bind(':id', $id);
        return $faq_questions=$this->db->resultSet();

    }

}
?>