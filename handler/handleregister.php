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
$role = "user";

require_once 'functions.inc.php';

    if(emptyInputSignup($username,$email,$password,$confirmPassword) !== false){
    header("location: ../register.php?error=emptyinput");
    exit();
    }
    if(invalidUsername($username) !== false){
        header("location: ../register.php?error=invalidUsername");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../register.php?error=invalidEmail");
        exit();
    }
    if(pwdMatch($password, $confirmPassword) !== false){
        header("location: ../register.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false){
        header("location: ../register.php?error=usernametaken");
        exit();
    }

    createUser($conn, $username, $email, $password, $role);
}
else{
    header('Location: ../register.php');
    exit();
}




//**MOVE THIS SECCTION TO FUNCTIONS */

// if ($password === $confirmPassword){
//     //encrypt the password
//     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
// }

// $sql = "INSERT INTO customers (username, email, password, role) VALUES (?,?,?,?)";
// $stmt = $conn->prepare($sql);

// $stmt->bind_param("ssss", $username, $email, $hashedPassword, $role);

// //send to database
// $stmt->execute();
// //check to see if we have an id
// if($stmt->insert_id){
//     $error['username'] = 'UserName already Exists';
// }

// session_start();
// $_SESSION['username'] = $username;
// $_SESSION['id'] = $stmt->insert_id;
// $_SESSION['role'] = $role;

// $conn->close();



// header("Location: ../index.php");



?>
