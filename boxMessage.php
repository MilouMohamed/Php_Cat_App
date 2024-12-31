<?php

require 'redirect.php';
include 'db.php';

$page_title = "Page Chat White Frend";

include 'header.php';


if(!isset($_GET['id_User'])) {
echo '<div class="text-center alert alert-danger m-5 ">No User Here </div>';
exit;
}else {


$idUserResept=intval($_GET['id_User']);


$email =  $_SESSION['user']['email'];
$user = DataBaseAppChat::checkUser($email);
$img = UPLOAD_DIR . $user->img;
$name =  $user->name;
$etat =   $user->etat  == 1 ? "Online" : "Ofline";

?>
<div class="msg-page  ">
    <div class="  container  d-flex align-items-center justify-content-center">

        <div class="  div-v2  d-flex align-items-center justify-content-center ">

            <div class="box-chat  rounded p-3">

                <header class="d-flex  align-items-center border-bottom border-white mb-2 ">
                    <img class="rounded-circle m-1 me-4 mb-2 border border-1 border-black" width="65px" height="65px" src="./<?= $img  ?>" alt="No Image Profile">
                    <div class="info-user ">
                        <h5><?= $name   ?></h5>
                        <p class="m-1 text-success fw-bolder"><?= $etat  ?></p>
                    </div>
                    <a href="logout.php" class="btn  btn-dark ms-auto  ">logout</a>
                </header>

                <body>
                    <div class="btn-serhc d-flex ">
                        <div class="input-group me-2"> 
                            <input class="form-control" value="e" type="search" placeholder="Rechercher..." aria-label="Search">
 
                        </div>

                        <button class="btn btn-outline-warning" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </body>

                <div class="list-users-serche my-3 bg-white  rounded-2 p-2 d-none">

                </div>
            </div>


        </div><!--//container -->
    </div>

    <br /><br /><br />

    <div class="d-felx">
        <a class="btn btn-primary block" href="login.php">Login</a> <br>
        <a class="btn btn-info block" href="regester.php">Regester</a> <br>
        <a class="btn btn-warning block" href="index.php">Page Index</a>
    </div>
</div>

<script src="users-cherche.js"></script>



<?php
}
include 'footer.php';
 
?>