<?php 
include 'partials/connection.php';
$sql = "SELECT * FROM categories";
$result = $conn->query($sql);
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
                    New Category
                    </button>
                </form>
            </div>
        </div>
    </div>
    <br><br
<br><br>
<div class="container">
      <div class="row">
    <div class="col-sm-8">
            <h2 class="section-heading mb-5">
            <span class="section-heading-upper">List of categories</span>
            <span class="section-heading-lower">Check!</span>
            </h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
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
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['created_at']."</td>";
                        echo "<td>".$row['updated_at']."</td>";
                        echo "<td><a class='btn btn-outline-secondary' href='updatecategory.php?id=".$row['id']."' role='update'>Update</a></td>";
                        echo "<td><a class='btn btn-outline-danger' href='deletecategory.php?id=".$row['id']."' role='delete'>Delete</a></td>";
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