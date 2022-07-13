<?php 
    include_once "./setings/db.php";

    class Carts extends conect{
        public $cart;

        function GetCart(){
            $this->con();
            $this->cart=$this->db->prepare("SELECT * FROM stati");
            $this->cart->execute();
            $data = $this->cart->fetchAll();
            return $data;
        }

    }
?>