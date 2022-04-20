<?php

include '../partials/connection.php';

$email = filter_input(INPUT_POST, 'email',  FILTER_SANITIZE_EMAIL);
$msg = filter_input(INPUT_POST, 'msg',  FILTER_SANITIZE_STRING);

//declare the error array
$error =[];
if(!isset($email) || empty($email)){
    $error['email'] = 'Email is required';
}
if(!isset($msg) || empty($msg)){
    $error['msg'] = 'Message is in blank';
}

if(empty($error)){
    $sql="INSERT INTO contact(email, msg) VALUES ('$email','$msg') ";

    $conn->query($sql);

    header('Location: ../index.php');
}else{
    echo '<pre>';
    print_r($error);
    echo '</pre>';
    require_once("contact.php");

}


?>

