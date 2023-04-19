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
    <title>CAKES</title>
</head>
<body>

   <div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="manages_cart.php" method="post">
           <div class="card" >
          <img src="img/menu-item-2.jpg" class="card-img-top" alt="..." height="250px">
            <div class="card-body text-center">
               <h5 class="card-title">Cherry Plum</h5>
               <p class="card-text">Rs 230</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Cherry Plum">
               <input  type ="hidden" name="price" value="230">
            </div>
          </div>
       </form>
        </div>  
        <div class="col-lg-3">
            <form action="manages_cart.php"method="post">
           <div class="card" >
          <img src="chocotruff.jpg" class="card-img-top" alt="..." height="250px">
            <div class="card-body text-center">
               <h5 class="card-title">Chocotruffle</h5>
               <p class="card-text">Rs 250</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="chocotruffle">
               <input  type ="hidden" name="price" value="250">
            </div>
          </div>
       </form>
        </div>
        <div class="col-lg-3">
            <form action="manages_cart.php"method="post">
           <div class="card" >
          <img src="rainbow.jpg" class="card-img-top" alt="..." height="250px" width="200px">
            <div class="card-body text-center">
               <h5 class="card-title">  Rainbow Cake</h5>
               <p class="card-text">Rs 280</p>
               <button type="submit"name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="rainbow">
               <input  type ="hidden" name="price" value="280">
            </div>
          </div>
       </form>
</div>
      </div>
   </div> 
   <div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="manages_cart.php" method="post">
           <div class="card" >
          <img src="img/menu-item-4.jpg" class="card-img-top" alt="..." height="230px">
            <div class="card-body text-center">
               <h5 class="card-title">The Berry Cake</h5>
               <p class="card-text">Rs 390</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="berry cake">
               <input  type ="hidden" name="price" value="390">
            </div>
          </div>
       </form>
        </div>
        
        <div class="col-lg-3">
            <form action="manages_cart.php"method="post">
           <div class="card" >
          <img src="rasmalai.jpg" class="card-img-top" alt="..." height="230px" >
            <div class="card-body text-center">
               <h5 class="card-title">Rasmalai</h5>
               <p class="card-text"> Rs 370</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="rasmalai">
               <input  type ="hidden" name="price" value="370">
            </div>
          </div>
       </form>
        </div>
        <div class="col-lg-3">
            <form action="manages_cart.php"method="post">
           <div class="card" >
          <img src="redvel.png" class="card-img-top" alt="..." height="229px" width="200px">
            <div class="card-body text-center">
               <h5 class="card-title">Red Velvet</h5>
               <p class="card-text">Rs 480</p>
               <button type="submit"name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Redvelvet">
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
            <form action="manages_cart.php" method="post">
           <div class="card" >
          <img src="img/menu-item-3.jpg" class="card-img-top" alt="..." height="230px">
            <div class="card-body text-center">
               <h5 class="card-title">The Nutcracker</h5>
               <p class="card-text">Rs 540</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="nutcracker">
               <input  type ="hidden" name="price" value="540">
            </div>
          </div>
       </form>
        </div>
        
        <div class="col-lg-3">
            <form action="manages_cart.php"method="post">
           <div class="card" >
          <img src="white.jpg" class="card-img-top" alt="..." height="230px">
            <div class="card-body text-center">
               <h5 class="card-title">White Forest</h5>
               <p class="card-text">Rs 280</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="whiteforest">
               <input  type ="hidden" name="price" value="280">
            </div>
          </div>
       </form>
        </div>
        <div class="col-lg-3">
            <form action="manages_cart.php"method="post">
           <div class="card" >
          <img src="half.jpg" class="card-img-top" alt="..." height="229px" width="200px">
            <div class="card-body text-center">
               <h5 class="card-title">Half Cakes</h5>
               <p class="card-text">Rs 330</p>
               <button type="submit"name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="half cakes">
               <input  type ="hidden" name="price" value="330">
            </div>
          </div>
       </form>
     </div>
      </div>
   </div> 
</body>
</html>