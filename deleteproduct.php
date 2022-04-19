<?php

include 'partials/connection.php';

$sql = "DELETE FROM products WHERE id=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET['id']);

$stmt->execute();
$conn->close();

header('Location: admindex.php');