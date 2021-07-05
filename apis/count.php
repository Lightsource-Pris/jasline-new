<?php
    class Count {
        public function count_votes(){
            $conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
            $query = mysqli_query($conn, "SELECT sum(votes) as total FROM nominees");
            $row = mysqli_fetch_array($query);
            if(is_null($row['total'])){
                return 0;
            }else{
                return $row['total'];
            }
            
        }

        public function count_nominees(){
            $conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
            $query = mysqli_query($conn, "SELECT * FROM nominees where `name` != 'Nill'");
            $count = mysqli_num_rows($query);
            return $count;
        }
    }

    $count_all = new Count(); 
    $count_nomi = $count_all->count_nominees();
    $count_votes = $count_all->count_votes();
?>