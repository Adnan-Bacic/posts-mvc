<?php
class Pages extends Controller{
    public function __construct(){
        //echo 'page loaded';
        //$this->postModel = $this->model('Post');
    }

    public function index(){
        //$posts = $this->postModel->getPosts();

        if(isLoggedIn()){
            redirect('posts');
        }

        $data = [
            'title' => 'welcome',
            'description' => 'posts mvc',
            //'posts' => $posts
        ];
        $this->view('pages/index', $data);
 
    }

    //error if no query string
    public function about(){
        $data = [
            'title' => 'about us',
            'description' => 'app to share posts made with php',
        ];
        $this->view('pages/about', $data);
    }
}