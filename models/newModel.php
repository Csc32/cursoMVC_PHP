<?php
    class NewModel extends Model{
        public function __construct(){
            parent::__construct();

        }

        public function insert(){
            echo "insert data";
        }
    }

?>