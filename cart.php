<?php
   include 'partials/connection.php';

   if(isset($_GET['id']) || ! empty($_GET['id']) ){
       $id = $_GET['id'];
   }
  
   $sql = "SELECT * FROM products WHERE id=".$id;
   $result = $conn->query($sql);
//    $products = $result->fetch_assoc();
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

<section class="page-section cta">
    
	<div class="container">
      <div class="row">
            <div class="col-sm-9">
                <div class=class="table-responsive">
                    <table class="table">
                            <thead>
                                <tr class="table_head">
                                    <th scope="col-1">Product</th>
                                    <th scope="col-2"></th>
                                    <th scope="col-3">Price</th>
                                    <th scope="col-4">Quantity</th>
                                    <th scope="col-5">Total</th>
                                <tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if($result->num_rows>0){
                                        while($row=$result->fetch_assoc()){
                                            echo "<tr class='table_row'>";
                                            echo "<th scope='col-1'>".'<img src="'.$row['image'].'" class="card-img-top" style="width:60px; height:60px" />'."</th>";
                                            echo "<td scope='col-2'>".$row['namePdt']."</td>";
                                            echo "<td scope='col-3'>€ ".$row['price']."</td>";
                                            echo "<td scope='col-4'><button id='aumentar' onclick='carrito(this)' value='aumentar'>+</button>".$row["<p id='contador' value=''></p>"]."<button id='disminuir' onclick='carrito(this)' value='disminuir'>-</button></td>";
                                            echo "<td scope='col-5'>€ total </td>";
                                            echo "<td><a class='btn btn-outline-danger' href='index.php?id=".$row['id']."' role='delete'>Delete</a></td>";
                                            echo "</tr>";
                                        } 
                                    }
                                ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>	

<h2 style="background-color:aquamarine;text-align:center;font-size:-webkit-xxx-large;">We're having problems now.. please, check later!</h2>
  <br><br><br>


<script type="text/javascript">
                                                var valor=0;
                                                function carrito(boton){
                                                    var contador = document.getElementById("contador").value;
                                                    if (boton.value=='aumentar') {
                                                        valor++
                                                    }else{
                                                        valor--
                                                    }
                                                    document.getElementById("contador").textContent = valor;
                                                }

                                                </script>
  
    <!-- Footer -->
  <?php
    include 'partials/footer.php'
    ?>

</body>


</html>