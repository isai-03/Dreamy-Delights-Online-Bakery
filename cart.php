<?php include ("header.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center  rounded bg-light my-5">
              <h1>MY CART</h1>  
            </div>
        <div class="col-lg-8">

            <table class="table">
          <thead class="text-center">
    <tr>
      <th scope="col">serial no</th>
      <th scope="col">item name</th>
      <th scope="col">item price</th>
      <th scope="col">quantity</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
            <tbody class="text-center">
     <?php 
    
    if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $key=>$value){
      $sr=$key+1;
      
       echo"<tr>
       <td>$sr</td>
       <td>$value[item_name]</td>
       <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
       <td>
       <input class='text-center iquantity' name='Mod_Quantity' onchange='subTotal();' type='number' value='$value[Quantity]' min='1' max='10'><input type='hidden' name='item_name' value='$value[item_name]'></td>
       <td class='itotal'></td>
       <td><form action='manage_cart.php' method='POST'>
       <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
       <input type='hidden' name='item_name' value='$value[item_name]'>
     </form>
     </td>
       </tr>
       "; 
    }}
    ?>
  </tbody>
</table>
        </div>
        <div class="col-lg-3">
        <div class="border bg-light rounded p-4">
            <h4>Total:</h4>
            <h5 class="text-right" id="gtotal"></h5><br>
            <?php 
          if(isset($_SESSION['cart'])&&count($_SESSION['cart'])>0)
          {
            ?>
<form action="purchase.php" method="POST">

            <div class="form group mb-3">
              <label >Full name</label>
              <input type="text" name="full_name" class="form-control" >
             </div>
             <div class="form group mb-3">
              <label >Phone number</label>
              <input type="text" name="phone_no"class="form-control" >
             </div>
             <div class="form group mb-3">
              <label >Address</label>
              <input type="text" name="address" class="form-control" >
             </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="pay_mode" value="COD"id="flexRadioDefault1">
               <label class="form-check-label" for="flexRadioDefault1">
                    Cash on delivery
                 </label>
                 </div>
               
                <button class="btn btn-primary btn-block" name="purchase">Make purchase</button>
               <p style="text-align:center">(or)</p>
</form> 
<form action="checkout.html">
<button type="submit" class="btn btn-primary btn-block" >Pay Online</button>
          </form>
</div><?php }
?>
   
    </div>
    </div>
   
    <script>
      var gt=0;
      var iprice=document.getElementsByClassName('iprice');
      var iquantity=document.getElementsByClassName('iquantity');
      var itotal=document.getElementsByClassName('itotal');
      var gtotal=document.getElementById('gtotal');
      function subTotal(){
        gt=0;
        for(i=0;i<iprice.length;i++){
           itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
           gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
      }
      subTotal();
      </script>
</body>
</html>
