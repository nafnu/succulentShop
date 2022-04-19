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
                <form action="handler/cathandler.php" method="post" enctype="multipart/form-data">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Add</span>
                        <span class="section-heading-lower">New Categories</span>
                    </h2>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="form-control" type="text" name="name" placeholder="New category of product">
                    </div>
                    <br>
            
                    <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>	

<section class="page-section cta">
	<div class="container">
      <div class="row">
            <div class="col-sm-6">
                <form action="handler/handleaddproducts.php" method="post" enctype="multipart/form-data">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Add</span>
                        <span class="section-heading-lower">New Products</span>
                    </h2>

                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="forName" class="form-label">Name</label>
                        <input class="form-control" type="text" name="namePdt" placeholder="Name of the product">
                    </div>
                    <br>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="forPrice" class="form-label">Price</label>
                        <input class="form-control" type="number" id="price" name="price" placeholder="">
                    </div>
                    <br>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="forType" class="form-label">Type of product</label>
                        <select name="category" id="category">
                        <option>Succulents</option>
                        <option>Collections</option>
                        <option>Cactus</option>
                        <option>Accessories</option>
                        </select>
                    </div>
                    <br>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="forDescription" class="form-label">Description</label>
                    <textarea class="form-control" placeholder="Leave description here" name="description" id="description" style="height: 100px"></textarea>
                    </div>
                    <br>
                    <div class="mb-3">
                        <input type="file" name="image" id="imageToUpload">
                    </div>
                    <br>
                    <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
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