<?php
require 'db.php';
 

$data = json_decode(file_get_contents("php://input"));

 
if (!isset($data->form, $data->email, $data->pass)) {
    echo json_encode([
        "message" => "Données incomplètes.",
        "date php" => $data ,
        "ok" => false,
    ]);
    exit;
}


 
$email = $data->email;
$password = $data->pass;
$form = $data->form;
$response = [];

if ($form ==  "regester"):


    $namComp = $data->nameComplt;
    $img = $data->img;



    $chek = DataBaseAppChat::checkUser($email, $password);

    $ook = true;
    $msg = "Successfy Added";

    if (!is_null($chek)) {
        $ook = false;
        $msg = "This Account is Exist  ";
    } else {
        DataBaseAppChat::addUser($namComp, $email, $img, $password);
    }

    $response = array(
        'message' => $msg,
        "ok" => $ook,
    );

endif;

if ($form ==  "login"):

    $chek = DataBaseAppChat::checkUser($email, $password);

    $ook = true;
    $msg = "Successfy Login";

    if (is_null($chek)) {
        $ook = false;
        $msg = "You Don't Have Account  Or Email Or Password Incorect";
    }

    $response = array(
        'message' => $msg,
        "ok" => $ook,
    );

endif;

echo json_encode($response);
?>
