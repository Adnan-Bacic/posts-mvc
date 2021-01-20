<?php
//app core class
//creates url and loads cure controller
//url formattering

class Core{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        //print_r($this->getUrl());

        $url = $this->getUrl();

        if(isset($url[0])){
            //look in conterollers for first value
            if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
                //set as controller
                $this->currentController = ucwords($url[0]);

                //unset 0 index
                unset($url[0]);
            }
        }

        //require controller
        require_once '../app/controllers/' . $this->currentController . '.php';

        //instantiate
        $this->currentController = new $this->currentController;

        //check for 2nd part of url
        if(isset($url[1])){
            //check if method exists
            if(method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
                //unset 1 index
                unset($url[1]);
            }
        }
        //echo $this->currentMethod;

        //get params
        $this->params = $url ? array_values($url) : [];

        //call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod],  $this->params);
    }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
        }
    }
}