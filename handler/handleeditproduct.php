<?php 
include '../partials/connection.php';

$namePdt = filter_input(INPUT_POST, 'namePdt',  FILTER_SANITIZE_STRING);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_INT);

// $adopted = $_POST['adopted'];
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);


//declare the error array
$error =[];

if(!isset($namePdt) || empty($namePdt)){
    $error['namePdt'] = 'Product name is required';
}
if(!isset($description) || empty($description)){
    $error['description'] = 'Description is required';
}
if(!isset($price) || empty($price)){
    $error['price'] = 'Price is required';
}
// if(!isset($adopted) || empty($adopted)  ){
    
//     $error['adopted'] = 'Adopted is required';
// }

if(empty($error)){
    $sql = "UPDATE products 
        SET namePdt=?, description=?, price=?, category_id=? 
        WHERE id=?";

    $stmt= $conn->prepare($sql);

    $stmt->bind_param("ssisi", $namePdt, $description, $price, $category_id, $id);
    
    $stmt->execute();
    $conn->close();

    header("Location: ../admindex.php");
} else{
    require_once("../editproduct.php");
}