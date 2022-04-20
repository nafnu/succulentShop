<?php

include '../partials/connection.php';

if(isset($_SESSION)){
    session_destroy();
}

if(isset($_POST["submit"])){
    $username = filter_input(INPUT_POST,'uid', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);

    
require_once 'functions.inc.php';

if(emptyInputLogin($username,$password) !== false){
header("location: ../login.php?error=emptyinput");
exit();
}

loginUser($conn, $username, $password );

}
else{
    header('Location: ../index.php');
    exit();
}