<?php
class Post{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getPosts(){
        $sql = "SELECT *, mvc_posts.id as postID, mvc_users.id as userID, mvc_posts.created_at as postCreated, mvc_users.created_at as userCreated FROM mvc_posts INNER JOIN mvc_users ON mvc_posts.user_id = mvc_users.id ORDER BY mvc_posts.created_at DESC";
        $this->db->query($sql);

        $results = $this->db->getResults();
        return $results;
    }

    public function addPost($data){
        $sql = "INSERT INTO mvc_posts(title, user_id, body) VALUES(?,?,?)";
        $this->db->query($sql);
        $this->db->bind(1, $data['title']);
        $this->db->bind(2, $data['user_id']);
        $this->db->bind(3, $data['body']);

        if($this->db->executeQuery()){
            return true;
        } else {
            return false;
        }
    }

    public function updatePost($data){
        $sql = "UPDATE mvc_posts SET title = ?, body = ? WHERE id = ?";
        $this->db->query($sql);
        $this->db->bind(1, $data['title']);
        $this->db->bind(2, $data['body']);
        $this->db->bind(3, $data['id']);

        if($this->db->executeQuery()){
            return true;
        } else {
            return false;
        }
    }

    public function getPostByID($id){
        $sql = "SELECT * FROM mvc_posts WHERE id = ?";
        $this->db->query($sql);
        $this->db->bind(1, $id);

        $row = $this->db->getSingleResult();

        return $row;
    }

    public function deletePost($id){
        $sql = "DELETE FROM mvc_posts WHERE id = ?";
        $this->db->query($sql);
        $this->db->bind(1, $id);

        if($this->db->executeQuery()){
            return true;
        } else {
            return false;
        }
    }
}