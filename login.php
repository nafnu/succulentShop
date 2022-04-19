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
                <form action="handler/handleaddproducts.php" method="post" enctype="multipart/form-data">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Welcome back!</span>
                        <span class="section-heading-lower">Sign In</span>
                    </h2>

                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email" id="email" placeholder="Enter email">
                    </div>
                    <br>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="pasword" class="form-label">Password</label>
                        <input class="form-control" type="password" id="password" placeholder="Password">
                    </div>
                    <br>
                    <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Sign In
                    </button>
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