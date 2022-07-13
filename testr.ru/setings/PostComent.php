<?php 
include_once "./setings/db.php";

class Post extends conect{ 
    public $coment;
    public $getcom;
    function Coment($name,$text){
        $id=$_GET["id"];
        $this->con();
        if(!empty($name)&& !empty($text)){
            $this->coment=$this->db->query("INSERT INTO comment (`name`,`text`,`comment`) VALUES('$name','$text','$id')");
        }
    }

    function getComent(){
        $id=$_GET["id"];
        $this->con();
        $this->getcom=$this->db->prepare("SELECT * FROM comment WHERE comment=$id");
        $this->getcom->execute();
        $data = $this->getcom->fetchAll();
        return $data;
    }
}
?>