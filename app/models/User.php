<?php
class User{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    //register user
    public function registerUser($data){
        $sql = "INSERT INTO mvc_users(name, email, password) VALUES(?,?,?)";
        $this->db->query($sql);
        $this->db->bind(1, $data['name']);
        $this->db->bind(2, $data['email']);
        $this->db->bind(3, $data['password']);

        if($this->db->executeQuery()){
            return true;
        } else {
            return false;
        }
    }

    //find user my mail
    public function findUserByEmail($email){
        $sql = "SELECT * FROM mvc_users WHERE email = ?";
        $this->db->query($sql);
        $this->db->bind(1, $email);
  
        $row = $this->db->getSingleResult();
  
        //Check Rows
        if($this->db->getRowCount() > 0){
          return true;
        } else {
          return false;
        }
      }

    //login user
    public function login($email, $password){
        $sql = "SELECT * FROM mvc_users WHERE email = ?";
        $this->db->query($sql);
        $this->db->bind(1, $email);

        $row = $this->db->getSingleResult();

        $hashed_password = $row->password;
        if(password_verify($password, $hashed_password)){
            return $row;
        } else {
            return false;
        }
    }

    //find user by email
    public function getUserByID($id){
        $sql = "SELECT * FROM mvc_users WHERE id = ?";
        $this->db->query($sql);
        $this->db->bind(1, $id);

        $row = $this->db->getSingleResult();

        return $row;
    }
}