<?php 

//**Register user */
function emptyInputSignup($username,$email,$password,$confirmPassword){
    $result;
    if(empty($username) || empty($email) || empty($password) ||empty($confirmPassword)){
        $result = true;
    }
    else{
        $result = false;
    }
    
    return $result;
}

function invalidUsername($username){
    $result;
    if(preg_match("/^[a-zA-Z0-9]*$/",$username)){
        $result = true;
    }
    else{
        $result = false;
    }
    
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    
    return $result;
}

function pwdMatch($password, $confirmPassword){
    $result;
    if($password !== $confirmPassword){
        $result = true;
    }
    else{
        $result = false;
    }
    
    return $result;
}

function uidExists($conn, $username, $email){
 
    $sql = "SELECT * FROM customers WHERE username = ? OR email = ?;";
 $stmt = mysqli_stmt_init($conn);

 if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../register.php?error=usernametaken");
    exit();
 }

 mysqli_stmt_bind_param($stmt, "ss", $username, $email);
 mysqli_stmt_execute($stmt);

 $resultData = mysqli_stmt_get_result($stmt);

 if($row = mysqli_fetch_assoc($resultData)){
    return $row;
 }
 else{
     $result = false;
     return $result;
 }

 mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $password, $role){
 $sql = "INSERT INTO customers (username, email, password, role) VALUES (?,?,?,?);";
 $stmt = mysqli_stmt_init($conn);

 if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../register.php?error=usernametaken");
    exit();
 }

 $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

 mysqli_stmt_bind_param($stmt, "ssss", $username, $email,  $hashedPassword, $role);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);

 header("Location: ../register.php?error=none");
 exit();
}

//**Register ADMI*/

function createUserAdmi($conn, $username, $email, $password, $role){
    $sql = "INSERT INTO customers (username, email, password, role) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
   
    if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location: ../adduser.phpp?error=usernametaken");
       exit();
    }
   
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
   
    mysqli_stmt_bind_param($stmt, "ssss", $username, $email,  $hashedPassword, $role);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
   
    header("Location: ../adduser.php?error=none");
    exit();
}


//**Login */
function emptyInputLogin($username,$password){
    $result;
    if(empty($username) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    
    return $result;
}

function loginUser($conn, $username, $password){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
        header("Location: ../login.php?error=wronglogin");
        exit();
    }

    $hashedPassword = $uidExists["password"];
    $checkPwd = password_verify($password, $hashedPassword);

    if($checkPwd === false){
        header("Location: ../login.php?error=wronglogin");
        exit();
    }
    
    if ($checkPwd === true){
      session_start();
      $_SESSION["useruid"] = $uidExists["id"];
      $_SESSION["userrole"] = $uidExists["role"];

      if($uidExists["role"] === "admi"){
        header("location: ../admindex.php");
        exit();
      }else{
        header("location: ../index.php");
        exit(); 
      }
        //header("location: ../index.php");
        //exit();
    }

}
