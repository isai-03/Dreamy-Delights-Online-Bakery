<?php
include("header.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(isset($_POST['Add_To_Cart'])){
      if(isset($_SESSION['cart'])){
          $myitems=array_column($_SESSION['cart'],'item_name');
          if(in_array($_POST['item_name'],$myitems))
          {
              $message="already in cart";
              echo"<script>alert('$message');
              window.location.href='desserts.php';
              </script>";
          }
          else{
      $count=count($_SESSION['cart']);
      $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'Quantity'=>1);
      echo"<script>alert('item added');
              window.location.href='desserts.php';
              </script>";
          }
      }else{
        $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'Quantity'=>1);
        echo"<script>alert('item added');
              window.location.href='desserts.php';
              </script>";
      }
  }
  if(isset($_POST['Remove_Item'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['item_name']==$_POST['item_name']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo"<script>
            alert('Item removed');
            window.location.href='cart.php';
            </script>";
        }
    }
  }
}
?>