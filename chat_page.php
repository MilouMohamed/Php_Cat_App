<?php 

require 'redirect.php';
include 'db.php';

$page_title="Page Chat Messages";

include 'header.php';
 echo "Page chat";
?>

 <?php
  
 
 echo '<pre>';
 print_r($_SESSION);
 echo '</pre>';
 $img =UPLOAD_DIR.$_SESSION['user']['img'] ;
 ?>

<img src='./<?=$img  ?>' alt="No img">

<br>
<hr>

<a href="login.php">Login</a> <br>
<a href="regester.php">Regester</a> <br>
<a href="index.php">Page Index</a>





<?php 
include 'footer.php';
 
?>


