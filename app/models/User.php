<?php
  class User {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function findUserByEmail($email) {
      $this->db->query('SELECT * FROM users WHERE email = :email ');
      $this->db->bind(':email', $email);
      $row = $this->db->single();

      if ($this->db->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    }

    public function register($data) {
      $this->db->query('INSERT INTO users (last_name, first_name, birthday_date, email, password) VALUES(:last_name, :first_name, :email, :password)');
      // Bind values
      $this->db->bind('last_name', $data['last_name']);
      $this->db->bind('first_name', $data['first_name']);
      $this->db->bind('birthday_date', $data['birthday_date']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('password', $data['password']);

      // Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function findTest1NeedsOfUser($email) {
      $this->db->query("SELECT tests.number FROM tests, users WHERE users.email = :email AND users.id = tests.user_id AND tests.title = 'Temps de réaction à un son'");
      $this->db->bind(':email', $email);
      return $test1_needs=$this->db->resultSet();
    }
  }
?> 