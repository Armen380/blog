<?php
    require_once "./setings/db.php";
    class Tip extends conect{
        public $tip;
       
        function getTips(){
            $this->con();
            $this->tip = $this->db->prepare("SELECT * FROM tips");
            $this->tip->execute();
            $data = $this->tip->fetchAll();
            return $data;
        }

    }
?>

