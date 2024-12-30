<?php

require 'redirect.php';
include 'db.php';

$page_title = "Page Chat Messages";

include 'header.php';

$email =  $_SESSION['user']['email'];
$user = DataBaseAppChat::checkUser($email);
$img = UPLOAD_DIR . $user->img;
$name =  $user->name;
$etat =   $user->etat  == 1 ? "Online" : "Ofline";
 
?>
<div class="chat-page  ">
    <div class="  container  d-flex align-items-center justify-content-center">

        <div class="  div-v2  d-flex align-items-center justify-content-center ">

            <div class="box-chat  rounded p-3">

                <header class="d-flex  align-items-center border-bottom border-white mb-2 ">
                    <img class="rounded-circle m-1 me-4" width="60px" height="60px" src="./<?= $img  ?>" alt="No Image Profile">
                    <div class="info-user ">
                        <h5><?= $name   ?></h5>
                        <p><?= $etat  ?></p>
                    </div>
                    <a href="logout.php" class="btn  btn-dark ms-auto  ">logout</a>
                </header>

                <body>
                    <form class="btn-serhc d-flex "> 
                        <div class="input-group me-2">
                             
                             <input class="form-control" type="search" placeholder="Rechercher..." aria-label="Search">

                        </div>

                        <button class="btn btn-outline-warning" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </body>
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





<?php
include 'footer.php';

?>