<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'testing');
$name=$_POST['user'];
$pass=$_POST['password'];
$s="select*from admin_login where admin_name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    $message="Username Already Exists";
    echo "<script>alert('$message')</script>";
   echo "<script>window.location.href='login.html';</script>";
}
else{
    $reg="insert into usertables(admin_name,Password)values('$name','$pass')";
    mysqli_query($con,$reg);
    $messages="Data Successfully Inserted";
    echo "<script>alert('$messages')</script>";
   echo "<script>window.location.href='home.html';</script>";
}
?>