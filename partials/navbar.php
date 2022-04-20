<?php
session_start();
?>

<!-- Navigation --> 

   <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">NAFF Décor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="blog.php">Blogs</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
      </ul>
      <a href='#'><img class='how-pos4 pointer-none' src='img/icons/b.png' style='height: 25px; margin-right: 10px;' alt='ICON'></a>
      <?php
          if(isset($_SESSION["useruid"])){
            echo "<a href='profile.php'><input type='button' class='btn btn-secondary' value='Profile' style='margin-right: 10px;' ></a>";
            echo "<a href='logout.php'><input type='button' class='btn btn-outline-warning' value='Log out'  style='margin-right: 10px;'></a>";
          }
          else{
            echo "<span class='navbar-text'>";
            echo "<a href='login.php'><input type='button' class='btn btn-primary' value='Log in' style='margin-right: 10px;' ></a>";
            echo "<a href='register.php'><input type='button' class='btn btn-outline-light' value='Register'style='margin-right: 10px;'  ></a>";
            echo "</span>";
          }

        ?>
     </div>
  </div>
</nav>