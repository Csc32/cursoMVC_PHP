<?php

    require_once "controllers/error.php";
    class App {
        function __construct(){
           // echo "new App";

            $url = isset($_GET['url']) ? $_GET['url'] : "main";
            $url = rtrim($url,"/");
            $url = explode("/",$url);
            if($url == "main"){ 
                $controller = new $url;
                $controller->loadModel('main');
            }
            //var_dump($url);
            $fileController = "controllers/" . $url[0] . ".php";
      
            if(file_exists($fileController)){
                require_once $fileController;
                $controller = new $url[0];
                $controller->loadModel($url[0]);
                if(isset($url[1])){
                    $controller->{$url[1]}();
                }

            }else{
                $controller = new ErrorClass();                
            }
        }
    }

?>