<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
        $this->db->query('INSERT INTO customers (E-mail, Password) VALUES(:E-mail, :Password)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':E-mail', $data['email']);
        $this->db->bind(':Password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function signin($email, $password) {
        $this->db->query('SELECT * FROM customers WHERE E-mail = :E-mail');

        //Bind value
        $this->db->bind(':E-mail', $email);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM customers WHERE E-mail = :E-mail');

        //Email param will be binded with the email variable
        $this->db->bind(':E-mail', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
