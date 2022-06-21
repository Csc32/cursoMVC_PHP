<?php
    class NewUser extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->render("newUser/index");
        }

        function registerUser(){
            echo "Susscesful";
            $this->model->insert(); 
        }
    }

?>
