<?php 
include '../partials/connection.php';

$name = filter_input(INPUT_POST, 'name',  FILTER_SANITIZE_STRING);

// $adopted = $_POST['adopted'];
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);


//declare the error array
$error =[];

if(!isset($name) || empty($name)){
    $error['name'] = 'Category name is required';
}

if(empty($error)){
    $sql = "UPDATE categories 
        SET name=? 
        WHERE id=?";

    $stmt= $conn->prepare($sql);

    $stmt->bind_param("si", $name, $id);
    
    $stmt->execute();
    $conn->close();

    header("Location: ../admindex.php");
} else{
    require_once("../editproduct.php");
}