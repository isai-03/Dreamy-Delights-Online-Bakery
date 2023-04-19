<?php include ("header.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>BAKED GOODS</title>
</head>
<body>

   <div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="manages_carts.php" method="post">
           <div class="card">
          <img src="img/menu-item-5.jpg" class="card-img-top" alt="..." height="250px">
            <div class="card-body text-center">
               <h5 class="card-title">Dreamy Bites</h5>
               <p class="card-text">Rs 300</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="dreamy bites">
               <input  type ="hidden" name="price" value="300">
            </div>
          </div>
       </form>
        </div>  
        <div class="col-lg-3">
            <form action="manages_carts.php"method="post">
           <div class="card" >
          <img src="img/menu-item-6.jpg" class="card-img-top" alt="..." height="250px">
            <div class="card-body text-center">
               <h5 class="card-title">Gift Hamper</h5>
               <p class="card-text">Rs 500</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Gift Hamper">
               <input  type ="hidden" name="price" value="500">
            </div>
          </div>
       </form>
        </div>
        <div class="col-lg-3">
            <form action="manages_carts.php"method="post">
           <div class="card" >
          <img src="desserts/brownies.jpg" class="card-img-top" alt="..." height="250px" width="200px">
            <div class="card-body text-center">
               <h5 class="card-title">Assorted Brownies</h5>
               <p class="card-text">Rs 180</p>
               <button type="submit"name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="assorted brownies">
               <input  type ="hidden" name="price" value="180">
            </div>
          </div>
       </form>
</div>
      </div>
   </div> 
   <div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="manages_carts.php" method="post">
           <div class="card" >
          <img src="desserts/cupcake.jpg" class="card-img-top" alt="..." height="230px">
            <div class="card-body text-center">
               <h5 class="card-title">Frosty cupcake</h5>
               <p class="card-text">Rs 200</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="frosty cupcake">
               <input  type ="hidden" name="price" value="200">
            </div>
          </div>
       </form>
        </div>
        
        <div class="col-lg-3">
            <form action="manages_carts.php"method="post">
           <div class="card" >
          <img src="desserts/donuts.jpg" class="card-img-top" alt="..." height="230px" >
            <div class="card-body text-center">
               <h5 class="card-title">Donuts (pcs 4)</h5>
               <p class="card-text"> Rs 320</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="donuts">
               <input  type ="hidden" name="price" value="320">
            </div>
          </div>
       </form>
        </div>
        <div class="col-lg-3">
            <form action="manages_carts.php"method="post">
           <div class="card" >
          <img src="desserts/gulab gamun.webp" class="card-img-top" alt="..." height="229px" width="200px">
            <div class="card-body text-center">
               <h5 class="card-title">Gulab Jamun</h5>
               <p class="card-text">Rs 480</p>
               <button type="submit"name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Gulab Jamun">
               <input  type ="hidden" name="price" value="480">
            </div>
          </div>
       </form>
</div>
      </div>
   </div> 
   <div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="manages_carts.php" method="post">
           <div class="card" >
          <img src="desserts/pastry.avif" class="card-img-top" alt="..." height="230px">
            <div class="card-body text-center">
               <h5 class="card-title">Truffle Pastry</h5>
               <p class="card-text">Rs 90</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="pastry">
               <input  type ="hidden" name="price" value="90">
            </div>
          </div>
       </form>
        </div>
        
        <div class="col-lg-3">
            <form action="manages_carts.php"method="post">
           <div class="card" >
          <img src="desserts/macarons.jpg" class="card-img-top" alt="..." height="230px">
            <div class="card-body text-center">
               <h5 class="card-title">Macarons (pcs 10)</h5>
               <p class="card-text">Rs 500</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="macarons">
               <input  type ="hidden" name="price" value="500">
            </div>
          </div>
       </form>
        </div>
        <div class="col-lg-3">
            <form action="manages_carts.php"method="post">
           <div class="card" >
          <img src="desserts/tiramisu.jpg" class="card-img-top" alt="..." height="229px" width="200px">
            <div class="card-body text-center">
               <h5 class="card-title">Tiramisu</h5>
               <p class="card-text">Rs 100</p>
               <button type="submit"name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="tiramisu">
               <input  type ="hidden" name="price" value="100">
            </div>
          </div>
       </form>
     </div>
      </div>
   </div> 
</body>
</html>