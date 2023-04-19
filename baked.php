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
            <form action="manage_carts.php" method="post">
           <div class="card">
          <img src="muffins.jpg" class="card-img-top" alt="..." height="250px">
            <div class="card-body text-center">
               <h5 class="card-title">Blueberry Muffins</h5>
               <p class="card-text">Rs 30</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Blueberry Muffins">
               <input  type ="hidden" name="price" value="30">
            </div>
          </div>
       </form>
        </div>  
        <div class="col-lg-3">
            <form action="manage_carts.php"method="post">
           <div class="card" >
          <img src="pie.jpg" class="card-img-top" alt="..." height="250px">
            <div class="card-body text-center">
               <h5 class="card-title">Apple Pie</h5>
               <p class="card-text">Rs 150</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="apple pie">
               <input  type ="hidden" name="price" value="150">
            </div>
          </div>
       </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_carts.php"method="post">
           <div class="card" >
          <img src="bread.jpg" class="card-img-top" alt="..." height="250px" width="200px">
            <div class="card-body text-center">
               <h5 class="card-title"> French Breads</h5>
               <p class="card-text">Rs 180</p>
               <button type="submit"name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="french bread">
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
            <form action="manage_carts.php" method="post">
           <div class="card" >
          <img src="img/menu-item-1.jpg" class="card-img-top" alt="..." height="230px">
            <div class="card-body text-center">
               <h5 class="card-title">The Walnut loaf</h5>
               <p class="card-text">Rs 200</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="walnut loaf">
               <input  type ="hidden" name="price" value="200">
            </div>
          </div>
       </form>
        </div>
        
        <div class="col-lg-3">
            <form action="manage_carts.php"method="post">
           <div class="card" >
          <img src="tart.jpg" class="card-img-top" alt="..." height="230px" >
            <div class="card-body text-center">
               <h5 class="card-title">Chocolate Tart</h5>
               <p class="card-text"> Rs 70</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Chocolate tart">
               <input  type ="hidden" name="price" value="70">
            </div>
          </div>
       </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_carts.php"method="post">
           <div class="card" >
          <img src="garlic.jpg" class="card-img-top" alt="..." height="229px" width="200px">
            <div class="card-body text-center">
               <h5 class="card-title">Garlic Bread</h5>
               <p class="card-text">Rs 180</p>
               <button type="submit"name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="Garlic Bread">
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
            <form action="manage_carts.php" method="post">
           <div class="card" >
          <img src="eggpuffs.jpg" class="card-img-top" alt="..." height="230px">
            <div class="card-body text-center">
               <h5 class="card-title">Eggpuffs</h5>
               <p class="card-text">Rs 35</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="eggpuffs">
               <input  type ="hidden" name="price" value="35">
            </div>
          </div>
       </form>
        </div>
        
        <div class="col-lg-3">
            <form action="manage_carts.php"method="post">
           <div class="card" >
          <img src="cinnamon.jpg" class="card-img-top" alt="..." height="230px">
            <div class="card-body text-center">
               <h5 class="card-title">Cinnamon roll</h5>
               <p class="card-text">Rs 80</p>
               <button type="submit" name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="cinnamon roll">
               <input  type ="hidden" name="price" value="80">
            </div>
          </div>
       </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_carts.php"method="post">
           <div class="card" >
          <img src="cookies.jpg" class="card-img-top" alt="..." height="229px" width="200px">
            <div class="card-body text-center">
               <h5 class="card-title">Cookies(pcs 3)</h5>
               <p class="card-text">Rs 100</p>
               <button type="submit"name="Add_To_Cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="item_name" value="cookie">
               <input  type ="hidden" name="price" value="100">
            </div>
          </div>
       </form>
     </div>
      </div>
   </div> 
</body>
</html>