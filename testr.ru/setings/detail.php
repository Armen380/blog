<?php 
    include_once "./setings/db.php";
    class Detail extends conect{
       public $cartId;
        function GetId(){
            $id=$_GET["id"];
           $this->con();
           $this->cartId=$this->db->prepare("SELECT * FROM stati WHERE id=$id");
           $this->cartId->execute();
           $data = $this->cartId->fetchAll();
           return $data;   
        }

        function UpdateView(){
            $id=$_GET["id"];
            $this->con();
            $this->db->query("UPDATE stati SET view=view+1 WHERE id=$id");           
        }
    }
?>