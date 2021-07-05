<?php
include "connector.php";
class Nominate extends Connector{

    public function nominatee(){
        if(isset($_POST['nominate'])){
        
            $name = $_POST['name'];
            $category = $_POST['category'];
            $sub_category = $_POST['sub_category'];
            $votes = 0;
            $this->conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
            $query = $this->conn->prepare("INSERT INTO nominees(`name`,`category`,`sub_category`,`votes`) VALUES(?,?,?,?)");
            $query->bind_param("ssss",$name,$category,$sub_category,$votes);
            $query->execute();
            if($query){
                echo '<script>alert("Nominee successfully added!")</script>';
                echo "<script>location.href=''</script>";
            }else{
                echo '<script>alert("Error ,try again please!")</script>';
                echo "<script>location.href=''</script>";
            }      
                    
            }
        
    }
}

    $new_nominee = new Nominate();
    $nominate = $new_nominee->nominatee();
?>

