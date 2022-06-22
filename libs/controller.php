<?php
    Class Controller{
        function __construct(){
            $this->view = new View();
        }

        function loadModel($model){
                $url = 'models/'.$model.".php";
        
                if(file_exists($url)){
                    //echo $url;
                    require $url;

                    $modelName   = $model.'Model';
                    echo $modelName;

                    $this->model = new $modelName();
                }
        }
      }

?>
