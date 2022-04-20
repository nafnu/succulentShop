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
            <div class="col-sm-6">
                <div class="table-responsive-sm">
                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price </th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                <tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if($result->num_rows>0){
                                        while($row=$result->fetch_assoc()){
                                            echo "<tr>";
                                            echo "<th scope='row'>".$row['id']."</th>";
                                            echo "<td>".$row['namePdt']."</td>";
                                            echo "<td>€ ".$row['price']."</td>";
                                            echo "<td> <button id='aumentar' onclick='carrito(this)' value='aumentar'>+</button>"
                                            
                                                // <button id='aumentar' onclick="carrito(this)" value="aumentar">+</button>
                                                // <button id='disminuir' onclick="carrito(this)" value="disminuir">-</button>

                                                // <p id='contador' value=""></p>
                                            
                                            
                                            
                                            ."</td>";
                                            //echo "<td><a class='btn btn-outline-secondary' href='updatecategory.php?id=".$row['id']."' role='update'>Update</a></td>";
                                            echo "<td>€ total </td>";
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