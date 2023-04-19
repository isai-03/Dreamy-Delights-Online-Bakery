<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'testing');
$name=$_POST['user'];
$pass=$_POST['password'];
$s="select*from admin_login where admin_name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$adminname=$row['admin_name'];
$password=$row['Password'];
echo $adminname;
if($adminname==$name && $password==$pass)
{
   echo "<script>window.location.href='adminpanel.php';</script>";
}
else{
    $message="Not an Admin";
    echo "<script>alert('$message')</script>";
   echo "<script>window.location.href='login.html';</script>";
}
?>