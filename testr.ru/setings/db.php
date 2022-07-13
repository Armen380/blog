<?php 
    class conect{
        protected $host ="localhost";
        protected $name = "root";
        protected $pass = "root";
        protected $dbname = "news";
        public $db;

        function con(){
            $this->db = new Pdo("mysql:host=$this->host;dbname=$this->dbname",$this->name,$this->pass);
            if($this->db==false){
                echo "Eror";
            }
        }
    }


?>