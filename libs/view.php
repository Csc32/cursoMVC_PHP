
<?php
    Class View{
        function render($name){
            require "views/". $name. ".php";
        }
    }

?>