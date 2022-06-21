<?php

    class DB {
        private $host;
        private $dbname;
        private $user;
        private $psw;

        function __construct(){
            $this->host = constant("HOST");
            $this->dbname = constant("DBNAME");
            $this->user = constant("USER");
            $this->psw = constant("PASSWORD");
        }

        function conection(){
            $dns = "pgsql:host=$this->host;port=5432;dbname=$this->dbname;user=$this->user;password=$this->psw";
            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            try {
                $conn = new PDO($dns,null,null,$option);
                if($conn){
                    echo "Conection susscces";
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

?>