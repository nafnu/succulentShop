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


<section class="page-section cta">
	<div class="container">
      <div class="row">
            <div class="col-sm-6">
                <form action="handler/handlelogin.php" method="post">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Welcome back!</span>
                        <span class="section-heading-lower">Sign In</span>
                    </h2>

                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Enter email">
                    </div>
                    <br>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="pasword" class="form-label">Password</label>
                        <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>

                        </div>
                    </div>
                    <br>
                    <div class="box-footer">
                    <button type="submit" class="btn btn-outline-dark""> Cancel</button>
                    <button type="submit" class="btn btn-outline-info" name="login"> Sign In</button>
                    </div>
                </form>
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