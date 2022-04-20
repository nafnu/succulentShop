<?php

if(isset($_POST['login'])){

    include 'partials/connection.php';

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM admins WHERE username='$email' AND password='$password'";
$result=$conn->query($sql);
$final=$result->fetch_assoc();

if($email=$final['username'] AND $password=$final['password']){
    header('location:addproduct.php');
}else{
    header('location:login.php');
}


}
?>

<!doctype html>
<html lang="en">

<head>
    <?php
      include 'partials/header.php';  //Header - Bootstrap
    ?>

<style>
section { 
  display: block;
}
</style>

</head>

<body>

    <?php 
    include 'partials/navbar.php';  //Navigation
      include 'partials/title.php';  //Title of the business
    ?>

<!-- Content page -->


<br>
    <!-- Container with cards-->
    <section class="page-section about-heading">
    <div class="container">
            <!-- <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/product-02.jpg" alt=""> -->
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Welcome back!</span>
                                <span class="section-heading-lower">Login</span>
                            </h2>
                        <!-- Log in form! This form resets if something goes  -->
                        <form action="handler/handlelogin.php" method="post">
                                <div class="mb-3">
                                        <label for="forEmail" class="form-label">Account <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="uid"  placeholder="Username/Email...">
                                        <span id="emailError" class="text-danger"></span>
                                </div>
                                <div class="mb-3">
                                        <label for="forPassword" class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password"  name="password" aria-describedby="passwordInput" placeholder="Password...">
                                        <span id="passwordError" class="text-danger"></span>
                                </div>
                                <!-- <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div> -->
                                <br><br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" name="submit"  class="btn btn-success btn-lg">Log In</button>
                                </div>
                            </form>
                            <br>
                            <h2 class="section-heading mb-4" style="color: darkred;text-align:center;">
                            <?php 
                                if(isset($_GET["error"])){
                                    if($_GET["error"] == "emptyinput"){
                                        echo "<p>Fill in all fields!</p>";
                                    }
                                    if($_GET["error"] == "wronglogin"){
                                        echo "<p>Incorrect login information!</p>";
                                    }
                                }
                            ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





  <!-- Footer -->
  <?php
    include 'partials/footer.php'
    ?>

</body>


</html>