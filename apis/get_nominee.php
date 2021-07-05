<?php
    include "connector.php";
    class Get_Nominee extends Connector{
       public function get_nom(){
            $this->conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
            $get_nomi = $this->conn->prepare("SELECT* FROM nominees where `name`!='Nill'");
            $get_nomi->execute();
            $get_nomi = $get_nomi->get_result();
            return $get_nomi; 
        }

        public function get_nom_order(){
            $this->conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
            $get_nomi = $this->conn->prepare("SELECT id,`name`,category,sub_category, max(votes) as max_votes FROM nominees where `name`!='Nill' group by sub_category,`name` order by votes desc ");
            $get_nomi->execute();
            $get_nomi = $get_nomi->get_result();
            return $get_nomi;
        }
        
    }

    $new_nominee = new Get_Nominee();
    $new_get = $new_nominee->get_nom();
    $new_get_order = $new_nominee->get_nom_order();
    
?>