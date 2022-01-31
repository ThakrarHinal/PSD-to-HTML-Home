<?php
    class rout 
    {
        public $controller = "functions";
        public $method = "Home";
        public $params = [];


        public function __construct()
        {
            $url = $this->url();
            if (!empty($url)) {
                // code...
                if (file_exists("../application/controllers/" . $url[0] . ".php")) {
                    // code...
                    $this->controller = $url[0];
                    unset($url[0]);
                }
                else{
                    echo "controller not found";
                }
            }

            require_once "../application/controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller;



            if (isset($url[1]) && !empty($url[1])) {
                // code...
                if (method_exists($this->controller, $url[1])) {
                    // code...
                    $this->method = $url[1];
                    unset($url[1]);
                }
                else{
                    echo "method not found";
                }
            }

            if (isset($url)) {
                // code...
                $this->params = $url;
            }
            else{
                $this->params = [];
            }

            call_user_func_array([$this->controller, $this->method], $this->params);
        }

        public function url(){
            if (isset($_GET['url'])) {
                // code...
                $url = $_GET['url'];
                $url = rtrim($url);
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode("/", $url);
                return $url;
            }
        }
    }
    

?>