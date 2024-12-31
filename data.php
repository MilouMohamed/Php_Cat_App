<?php   

if( !isset($_SESSION['user'] )){
    header("location:login.php");
    exit;
    }
    
echo  "he From data";










?>