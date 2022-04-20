<?php 
    include 'partials/connection.php';

    $sql = "SELECT * FROM customers";

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
      include 'partials/adminavbar.php';  //Navigation
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
                                <span class="section-heading-upper">ADD</span>
                                <span class="section-heading-lower">Register new user</span>
                            </h2>
                        <!-- Log in form! This form resets if something goes  -->
                            <form action="handler/handleregisterAdmi.php" method="post">
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

                                <br>
                                <div class="mb-3">
                                        <div class="bor8 m-b-20 how-pos4-parent">
                                        <label for="role">Type of role: </label>
                                            <select name="role">
                                                <?php
                                                include 'partials/connection.php';  
                                                $rls="SELECT * FROM role";
                                                $results=mysqli_query($conn,$rls);
                                                while($row=mysqli_fetch_assoc($results)){
                                                echo "<option value=".$row['role_user'].">".$row['role_user']."</option>";
                                                }

                                                ?>
                                            </select>
                                        </div>
                                </div>
                                <br>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" name="submit" class="btn btn-success btn-lg">Add User</button>
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
                                        echo "<p>You registered new user!</p>";
                                        
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

    <section class="page-section cta">
    <div class="container">
      <div class="row">
    <div class="col-sm-8">
            <h2 class="section-heading mb-5">
            <span class="section-heading-upper">List of users</span>
            <span class="section-heading-lower">Update or delete!</span>
            </h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <!-- <th scope="col">Password</th> -->
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                  
                    <!-- <th scope="col"><a class="btn btn-success" href="NewBook.php" role="new">New</a></th> -->
                <tr>
            </thead>
            <tbody>
            <?php 
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        echo "<tr>";
                        echo "<th scope='row'>".$row['id']."</th>";
                        echo "<td>".$row['username']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['role']."</td>";
                        // echo "<td>".$row['password']."</td>";
                        echo "<td>".$row['created_at']."</td>";
                        echo "<td>".$row['updated_at']."</td>";
                        echo "<td><a class='btn btn-outline-secondary' href='edituser.php?id=".$row['id']."' role='update'>Update</a></td>";
                        echo "<td><a class='btn btn-outline-danger' href='deleteuser.php?id=".$row['id']."' role='delete'>Delete</a></td>";
                        echo "</tr>";
                    } 
                }
            ?>
            </tbody>
        </table>
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

