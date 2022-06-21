<?php
    class ErrorClass extends Controller {
        function __construct(){
            parent::__construct();
            $this->view->message = "Error to load the source :(";
            $this->view->render("error/index");

        }
    }

?>