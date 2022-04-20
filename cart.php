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

<!-- 
    <style type="text/css">
        .counter-group button, 
        .counter-group input {
            /* display: inline-block; */
            /* margin : 5px; */
            /* padding: 5px; */
        }
    </style> -->

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
                                    <th scope="col-3">Price    </th>
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
                                            echo "<td scope='col-3'>€ ".'<input id="price" style="width:50px;text-align: center;" value="'.$row['price'].'"'."</td>";
                                            echo "<td scope='col-4'>".'<button onclick="increase()">+</button>
                                                    <input style="width:50px;text-align: center;" type="number" min="1" step="1" value="1" id="counter">
                                                    <button onclick="decrease()">-</button>'."</td>";
                                            echo "<td scope='col-5'>€ ".'<input
                                            id="total"
                                            type="number"
                                            style="width:50px;text-align: center;"disabled/>'."</td>";
                                            echo "<td><a class='btn btn-outline-danger' href='index.php?id=".$row['id']."' role='delete'>Cancel</a></td>";
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




    <script type="text/javascript">

             function $(id)
        {
            return document.getElementById(id);
        }

        function increase()
        {
            $('counter').value = parseInt($('counter').value) + 1;
            calcular();
        }

        function decrease()
        {
            var counterValue = parseInt($('counter').value);
            var newCounterValue = (counterValue)
                ? counterValue - 1
                : 0;

            $('counter').value = newCounterValue;
            calcular();
        }


        function calcular() {

        $('total').value = parseInt($('counter').value) * parseInt($('price').value);

        }

   

    </script>
  
    
  
  
  
  
  
  <!-- Footer -->
  <?php
    include 'partials/footer.php'
    ?>

</body>


</html>