<?php
include "connector.php";
class Disqualify extends Connector{

    public function delete(){
        
            $id = $_GET['id'];
            $this->conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
            $query = $this->conn->prepare("DELETE from nominees where id=?");
            $query->bind_param("s",$id);
            $query->execute();
            if($query){
                echo '<script>alert("Nominee successfully disqualified!")</script>';
                echo "<script>location.href='./'</script>";
                
            }else{
                echo '<script>alert("Error ,try again please!")</script>';
                echo "<script>location.href='./'</script>";
            }      
                    
        
    }
}

    $new_disqualify = new Disqualify();
    $disqualify = $new_disqualify->delete();
?>

