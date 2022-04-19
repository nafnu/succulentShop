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
    include 'partials/adminavbar.php';  //Navigation
      include 'partials/title.php';  //Title of the business
    ?>

<!-- Content page -->

<section class="page-section cta">
	<div class="container">
      <div class="row">
            <div class="col-sm-6">
                <form action="handler/cathandler.php" method="post" enctype="multipart/form-data">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Add</span>
                        <span class="section-heading-lower">New Categories</span>
                    </h2>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="form-control" type="text" name="name" placeholder="New category of product">
                    </div>
                    <br>
            
                    <button class="btn btn-primary">
                        Submit
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