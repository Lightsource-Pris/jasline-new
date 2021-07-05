<?php
    if(!isset($_GET['id'])){
        echo "<script>location.href='./'</script>";
    }
    include "../../apis/disqualify.php";
?>