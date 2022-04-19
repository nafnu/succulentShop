<?php

include '../partials/connection.php';

$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO contact(email, msg) VALUES ('$email','$msg') ";

$conn->query($sql);

header('Location: ../index.php');
?>

