<?php 
include 'partials/connection.php';

if(isset($_GET['id']) || ! empty($_GET['id']) ){
    $id = $_GET['id'];
}

$sql = "SELECT * FROM categories WHERE id=".$id;
$result = $conn->query($sql);
$categories = $result->fetch_assoc();
// echo '<pre>';
// print_r($categories['name']);
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
                <div class="col-sm-8">
                    <form action="handler/handleupdatecategory.php" method="post"  enctype="multipart/form-data">
                        <input type="hidden" value="<?=$id?>" name="id">
                        <h2 class="section-heading mb-5">
                            <span class="section-heading-upper">Update</span>
                            <span class="section-heading-lower">Previous Category</span>
                        </h2>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="name"  value="<?= $categories['name'] ?>">
                            <span class="text-danger"><?= (isset($error['name']))? $error['name'] : '' ?></span>
                        </div>
                        <br>
                
                        <button type="submit" class="btn btn-secondary">
                        Save Modification
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