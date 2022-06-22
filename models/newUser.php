<?php 
//* Register data
    class NewUserModel extends Model{
        public function __construct(){
            parent::__construct();

        }

        public function insert(){
            echo "insert data";
        }
    }

?>