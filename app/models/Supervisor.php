<?php
  class Supervisor {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function findSupervisorByEmail($email) {
      $this->db->query('SELECT * FROM supervisors WHERE supervisors.email = :email');
      $this->db->bind(':email', $email);
      $row = $this->db->single();
      if ($this->db->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    }

    public function findSupervisorById($id) {
      $this->db->query('SELECT * FROM supervisors WHERE supervisors.id = :id');
      $this->db->bind(':id', $id);
      $row = $this->db->single();
      if ($this->db->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    }

    public function sign_up($data) {
      $this->db->query('INSERT INTO supervisors (last_name, first_name, birthday_date, email, password) VALUES(:last_name, :first_name, :birthday_date, :email, :password)');
      $this->db->bind('last_name', $data['last_name']);
      $this->db->bind('first_name', $data['first_name']);
      $this->db->bind('birthday_date', $data['birthday_date']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('password', $data['password']);

      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function sign_in($email, $password){
      $this->db->query('SELECT * FROM supervisors WHERE email = :email');
      $this->db->bind(':email', $email);
      $row = $this->db->single();
      $hashed_password = $row->password;
      if (password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }

    public function getSupervisorById($id) {
      $this->db->query('SELECT * FROM supervisors WHERE id = :id');
      $this->db->bind(':id', $id);
      $row = $this->db->single(); 
      return $row;
    }
  }
?>  