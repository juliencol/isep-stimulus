<?php
  class User {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function findUserByEmail($email) {
      $this->db->query('SELECT * FROM users WHERE users.email = :email');
      $this->db->bind(':email', $email);
      $row = $this->db->single();
      if ($this->db->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    }

    public function findUserById($id) {
      $this->db->query('SELECT * FROM users WHERE users.id = :id');
      $this->db->bind(':id', $id);
      $row = $this->db->single();
      if ($this->db->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    }

    public function sign_up($data) {
      $this->db->query('INSERT INTO users (last_name, first_name, birthday_date, email, password) VALUES(:last_name, :first_name, :birthday_date, :email, :password)');
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
      $this->db->query('SELECT * FROM users WHERE email = :email');
      $this->db->bind(':email', $email);
      $row = $this->db->single();
      $hashed_password = $row->password;
      if (password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }

    public function findTests1OfUser($id) {
      $this->db->query("SELECT users.id, tests.title, tests.description, tests.date, tests.score FROM users INNER JOIN tests ON (users.id = :id AND users.id = tests.user_id AND tests.title = 'Temps de reaction a un son' AND tests.score IS NOT NULL ) ");
      $this->db->bind(':id', $id);
      return $test1_needs=$this->db->resultSet();
    }

    public function findTests2OfUser($id) {
      $this->db->query("SELECT users.id, tests.title, tests.description, tests.number, tests.date, tests.score FROM users INNER JOIN tests ON (users.id = :id AND users.id = tests.user_id AND tests.title = 'Capacite a reproduire un son'  AND tests.score IS NOT NULL ) ");
      $this->db->bind(':id', $id);
      return $test2_needs=$this->db->resultSet();
    }

    public function findTests3OfUser($id) {
      $this->db->query("SELECT users.id, tests.title, tests.description, tests.date, tests.score FROM users INNER JOIN tests ON (users.id = :id AND users.id = tests.user_id AND tests.title = 'Temps de reaction a une lumiere' AND tests.score IS NOT NULL )");
      $this->db->bind(':id', $id);
      return $test3_needs=$this->db->resultSet();
    }
    
    public function findNotificationsOfUser($id) {
      $this->db->query("SELECT users.id, tests.title, tests.description, tests.number FROM users INNER JOIN tests ON (users.id = :id AND users.id = tests.user_id AND score IS NULL ) ");
      $this->db->bind(':id', $id);
      return $notifications=$this->db->resultSet();
    }

    public function getUserById($id) {
      $this->db->query('SELECT * FROM users WHERE id = :id');
      $this->db->bind(':id', $id);
      $row = $this->db->single(); 
      return $row;
    }
  }

?>  