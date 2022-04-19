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



    <!-- Container with cards-->
    

    <div class="container">
        <div class="row">

            <?php
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo '<div class="col-3">';
                            echo '<div class="card" style="width: 18rem;">';
                                echo '<img src="'.$row['image'].'" class="card-img-top" style="width:100%; height:250px" alt="..." />';
                                echo '<div class="card-body">';
                                    echo '<h5 class="card-title">'.$row['name'].'</h5>';
                                    echo '<p class="card-text">'.$row['description'].' </p>';
                                    echo '<a href="adoptMe.php?id='.$row['id'].'" class="btn btn-primary">Adopt me</a>';
                                    echo '<a href="editPet.php?id='.$row['id'].'" class="btn btn-success">Edit</a>';
                                    echo '<a href="deletePet.php?id='.$row['id'].'" class="btn btn-danger">Delete</a>';
                                    echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                }

            ?>
        </div>
    </div>



    <!-- Footer -->
    <?php
    include 'partials/footer.php'
    ?>

</body>


</html>