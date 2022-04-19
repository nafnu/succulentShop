<?php 
    include 'partials/connection.php';

    if(isset($_GET['id']) || ! empty($_GET['id']) ){
        $id = $_GET['id'];
    }
   
    $sql = "SELECT * FROM products WHERE id=".$id;
    $result = $conn->query($sql);
    $products = $result->fetch_assoc();
    // echo '<pre>';
    // print_r($products['namePdt']);
    // echo '</pre>';

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
    include 'partials/adminavbar.php';  //Navigation
      include 'partials/title.php';  //Title of the business
    ?>

<!-- Content page -->

<section class="page-section cta">
	<div class="container">
      <div class="row">
            <div class="col-sm-6">
                <form action="handler/handleeditproduct.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?=$id?>" name="id">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Modify Product Information</span>
                        <span class="section-heading-lower">Edit THIS product</span>
                    </h2>

                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="namePdt" class="form-label">Name</label>
                        <input class="form-control" 
                        type="text" 
                        name="namePdt" 
                        id="" 
                        aria-describedby="namePdtInput" 
                        value="<?= $products['namePdt'] ?>">
                        <span class="text-danger"><?= (isset($error['namePdt']))? $error['namePdt'] : '' ?></span>
                    </div>
                    <br>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="price" class="form-label">Price</label>
                        <input class="form-control" 
                        type="number" id="" name="price" aria-describedby="priceInput" value="<?= $products['price'] ?>">
                        <span class="text-danger"><?= (isset($error['price']))? $error['price'] : '' ?></span>
                    </div>
                    <br>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="category">Type of product</label>
                        <select name="category_id" id="category">
                        <option <?= ($products['category_id'] === '1')? 'selected' : NULL ?> value="1">Accessories</option>
                        <option <?= ($products['category_id'] === '2')? 'selected' : NULL ?> value="2">Succulents</option>
                        <option <?= ($products['category_id'] === '3')? 'selected' : NULL ?> value="3">Collections</option>
                        <option <?= ($products['category_id'] === '4')? 'selected' : NULL ?> value="4">Cactus</option>
                        </select>
                    </div>
                    <br>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <label for="forDescription" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" style="height: 100px"><?= $products['description'] ?></textarea>
                    </div>
                    <br>
                    <br>
                    <button  type="submit" class="btn btn-primary">
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