<?php 

include '../partials/connection.php';

if(isset($_SESSION)){
    session_destroy();
}

if(isset($_POST["submit"])){
    echo "It works";
$username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);
$confirmPassword = filter_input(INPUT_POST,'confirmPassword', FILTER_SANITIZE_STRING);
$role = filter_input(INPUT_POST,'role', FILTER_SANITIZE_STRING);

require_once 'functions.inc.php';

    if(emptyInputSignup($username,$email,$password,$confirmPassword) !== false){
    header("location: ../adduser.php?error=emptyinput");
    exit();
    }
    if(invalidUsername($username) !== false){
        header("location: ../adduser.php?error=invalidUsername");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../adduser.php?error=invalidEmail");
        exit();
    }
    if(pwdMatch($password, $confirmPassword) !== false){
        header("location: ../adduser.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false){
        header("location: ../adduser.php?error=usernametaken");
        exit();
    }

    createUserAdmi($conn, $username, $email, $password, $role);
}
else{
    header('Location: ../adduser.php');
    exit();
}


?>
