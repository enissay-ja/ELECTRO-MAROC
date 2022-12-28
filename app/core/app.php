<?php
    class App{
    protected $controller = 'home';
    protected $methode = 'index';
    protected $params = [];
    
    public function __construct(){
       $url= $this->parseUrl();
        print_r($url);

        if (isset($url[0])) {
            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }
        
        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;
        var_dump($this->controller);
    }

       

    public function parseUrl(){
        if (isset($_GET['url'])){
            $url =explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            return $url;
        }
    }









    }