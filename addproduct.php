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
                <form action="handler/handleaddproducts.php" method="post" enctype="multipart/form-data">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Add</span>
                        <span class="section-heading-lower">New Products</span>
                    </h2>

                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="namePdt" class="form-label">Name</label>
                        <input class="form-control" type="text" name="namePdt" id="namePdt" placeholder="Name of the product">
                    </div>
                    <br>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="price" class="form-label">Price</label>
                        <input class="form-control" type="number" id="price" name="price" placeholder="1">
                    </div>
                    <br>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="category">Type of product</label>
                        <select name="category" id="category">
                            <?php
                            include 'partials/connection.php';  
                            $cat="SELECT * FROM categories";
                            $results=mysqli_query($conn,$cat);
                            while($row=mysqli_fetch_assoc($results)){
                            echo "<option value=".$row['id'].">".$row['name']."</option>";
                            }

                            ?>
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
                    <!-- <div class="form-group">
                            <label for="image">Selecte a picture</label>
                            <input type="file" id="image">
                    </div> -->
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