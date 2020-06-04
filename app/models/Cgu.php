<?php
class Cgu {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function CGU() {
        $this->db->query('SELECT * FROM cgu ');
        return $cgus=$this->db->resultSet();

    }

    public function addCGU($data){
        $this->db->query('INSERT INTO cgu (id,content) VALUES (:id,:content)');
        $this->db->bind('id', $data['id']);
        $this->db->bind('content', $data['content']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function modifCGU($id){
        $this->db->query('SELECT * FROM cgu WHERE id= :id');
        $this->db->bind(':id',$id);
        return $cgu=$this->db->resultSet();


    }
    public function removeCGU($id){
        $this->db->query('DELETE FROM cgu WHERE id = :id');
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}