<?php
    
    class MainController {
        protected $people;

        function __construct(){
            require_once ("../app/models/PeopleModel.php");
            $this->people = new PeopleModel();
        }

        public function home(){
            //Call simple home 
            require_once("../app/views/home.php");
        }

        public function save(){
            $data = $_REQUEST;
            $result = $this->people->save($data);
            require_once("../app/views/home.php");
        }

        public function error(){
            http_response_code(404);
            require_once("../app/views/404.php");
        }
    }
    
    
?>