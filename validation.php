<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name=$_POST['user'];
$mail=$_POST['email'];
$pass=$_POST['password'];
$s="select*from usertables where username='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
   echo "<script>window.location.href='home.html';</script>";}
else{
    $message="Register to login";
    echo "<script>alert('$message')</script>";
   echo "<script>window.location.href='login.html';</script>";
}
?>