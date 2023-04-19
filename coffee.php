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
    <title>title</title>
</head>
<body>

   <div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="post">
           <div class="card" >
          <img src="coffee/black.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
               <h5 class="card-title">Black coffee</h5>
               <p class="card-text">Rs 40</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Black Coffee">
               <input  type ="hidden" name="price" value="40">
            </div>
          </div>
       </form>
        </div>
        
        <div class="col-lg-3">
            <form action="manage_cart.php"method="post">
           <div class="card" >
          <img src="coffee/cappu.jpg" class="card-img-top" alt="..." >
            <div class="card-body text-center">
               <h5 class="card-title">cappuchino</h5>
               <p class="card-text">Rs 50</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Cappuchino">
               <input  type ="hidden" name="price" value="50">
            </div>
          </div>
       </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php"method="post">
           <div class="card" >
          <img src="coffee/chocmilk.jpg" class="card-img-top" alt="..." height="229px" width="200px">
            <div class="card-body text-center">
               <h5 class="card-title">Chocolate Milkshake</h5>
               <p class="card-text">Rs 80</p>
               <button type="submit"name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Chocolate Milkshake">
               <input  type ="hidden" name="price" value="80">
            </div>
          </div>
       </form>
</div>



      </div>
   </div> 
   <div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="post">
           <div class="card" >
          <img src="coffee/coldcoffee.jpg" class="card-img-top" alt="..." height="230px">
            <div class="card-body text-center">
               <h5 class="card-title">Cold coffee</h5>
               <p class="card-text">Rs 90</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Cold Coffee">
               <input  type ="hidden" name="price" value="90">
            </div>
          </div>
       </form>
        </div>
        
        <div class="col-lg-3">
            <form action="manage_cart.php"method="post">
           <div class="card" >
          <img src="coffee/orangejuice.jpg" class="card-img-top" alt="..." >
            <div class="card-body text-center">
               <h5 class="card-title">Orange Juice</h5>
               <p class="card-text"> Rs 70</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Orange Juice">
               <input  type ="hidden" name="price" value="70">
            </div>
          </div>
       </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php"method="post">
           <div class="card" >
          <img src="coffee/strawberry.jpg" class="card-img-top" alt="..." height="229px" width="200px">
            <div class="card-body text-center">
               <h5 class="card-title">Strawberry Milkshake</h5>
               <p class="card-text">Rs 80</p>
               <button type="submit"name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Strawberry Milkshake">
               <input  type ="hidden" name="price" value="80">
            </div>
          </div>
       </form>
</div>



      </div>
   </div> 
   <div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="post">
           <div class="card" >
          <img src="coffee/currant.jpg" class="card-img-top" alt="..." height="230px">
            <div class="card-body text-center">
               <h5 class="card-title">Black currant</h5>
               <p class="card-text">Rs 140</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Black currant">
               <input  type ="hidden" name="price" value="140">
            </div>
          </div>
       </form>
        </div>
        
        <div class="col-lg-3">
            <form action="manage_cart.php"method="post">
           <div class="card" >
          <img src="coffee/lagoon.jpg" class="card-img-top" alt="..." height="230px">
            <div class="card-body text-center">
               <h5 class="card-title">Blue Lagoon</h5>
               <p class="card-text">Rs 180</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="lagoon">
               <input  type ="hidden" name="price" value="180">
            </div>
          </div>
       </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php"method="post">
           <div class="card" >
          <img src="coffee/chai.jpg" class="card-img-top" alt="..." height="229px" width="200px">
            <div class="card-body text-center">
               <h5 class="card-title">Chai</h5>
               <p class="card-text">Rs 30</p>
               <button type="submit"name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Chai">
               <input  type ="hidden" name="price" value="30">
            </div>
          </div>
       </form>
</div>



      </div>
   </div> 
</body>
</html>