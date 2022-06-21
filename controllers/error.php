<?php
    class ErrorClass extends Controller {
        function __construct(){
            parent::__construct();
            $this->view->message = "Error source not found 😥";
            $this->view->render("error/index");

        }
    }

?>