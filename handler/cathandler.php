<?php

include '../partials/connection.php';

$name = filter_input(INPUT_POST, 'name',  FILTER_SANITIZE_STRING);

//declare the error array
$error =[];
if(!isset($name) || empty($name)){
    $error['name'] = 'Name is required';
}


if(empty($error)){
    $sql="INSERT INTO categories(name) VALUES ('$name') ";

    $conn->query($sql);

    header('Location: ../index.php');
}else{
    echo '<pre>';
    print_r($error);
    echo '</pre>';
    require_once("addproduct.php");

}


?>
