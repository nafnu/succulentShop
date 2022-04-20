<?php 
    include 'partials/connection.php';

    $sql = "SELECT * FROM products";

    $result = $conn->query($sql);

?>

<!doctype html>
<html lang="en">

<head>
    <?php
      include 'partials/header.php';  //Header - Bootstrap
    ?>

</head>

<body>

    <?php 
      include 'partials/navbar.php';  //Navigation
      include 'partials/title.php';  //Title of the business
    ?>
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
                                <span class="section-heading-upper">Hello!</span>
                                <span class="section-heading-lower">Register</span>
                            </h2>
                        <!-- Log in form! This form resets if something goes  -->
                            <form action="handler/handleregister.php" method="post">
                                <div class="mb-3">
                                        <label for="forUserName" class="form-label">User Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="username"  name="username" aria-describedby="usernameInput">
                                        <span id="usernameError" class="text-danger"></span>
                                </div>
                                <div class="mb-3">
                                        <label for="foremail" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email"  name="email" aria-describedby="emailInput">
                                        <span id="emailError" class="text-danger"></span>
                                </div>
                                <div class="mb-3">
                                        <label for="forPassword" class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password"  name="password" aria-describedby="passwordInput">
                                        <span id="passwordError" class="text-danger"></span>
                                </div>
                                <div class="mb-3">
                                        <label for="forconfirmPassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="confirmPassword"  name="confirmPassword" aria-describedby="confirmPasswordInput">
                                        <span id="passwordError" class="text-danger"></span>
                                </div>
                                <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" name="submit" class="btn btn-success btn-lg">Register</button>
                                </div>
                                
                            </form>

                            <br>
                            <h2 class="section-heading mb-4" style="color: darkred;text-align:center;">
                               
                            <?php 
                                if(isset($_GET["error"])){
                                    if($_GET["error"] == "emptyinput"){
                                        echo "<p>Fill in all fields!</p>";
                                    }
                                    if($_GET["error"] == "invalidUsername"){
                                        echo "<p>Choose a proper username!</p>";
                                    }
                                    if($_GET["error"] == "invalidEmail"){
                                        echo "<p>Choose a proper email! </p>";
                                    }
                                    if($_GET["error"] == "passwordsdontmatch"){
                                        echo "<p>Passwords doesn't match!</p>";
                                    }
                                    if($_GET["error"] == "stmtfailed"){
                                        echo "<p>Something went wrong, try again!</p>";
                                    }
                                    if($_GET["error"] == "usernametaken"){
                                        echo "<p>Username already taken!</p>";
                                    }
                                    if($_GET["error"] == "none"){
                                        echo "<p>You have register!</p>";
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

