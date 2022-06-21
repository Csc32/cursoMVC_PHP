<?php
    Class Controller{
        function __construct(){
            $this->view = new View();
        }

        function loadModel($model){
                $url = 'models/'.$model."/model.php";
                echo $url;

                if(file_exists($url)){
                    require $url;

                    $modelName   = $model.'Model';

                    $this->model = new $modelName();
                }
        }
      }

?>