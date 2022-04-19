<?php
include 'partials/connection.php';

// sql to delete a record
$sql = "DELETE FROM categories WHERE id=?";

$stmt=$conn->prepare($sql);

$stmt->bind_param("i", $id);

$id = $_GET['id'];

$stmt->execute();
$conn->close();


header("Location: addcategory.php");

?>