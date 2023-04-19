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
    $message="Username Already Exists";
    echo "<script>alert('$message')</script>";
   echo "<script>window.location.href='login.html';</script>";
}
else{
    $reg="insert into usertables(username,email,password)values('$name','$mail','$pass')";
    mysqli_query($con,$reg);
    $messages="Registered Successfully";
    echo "<script>alert('$messages')</script>";
   echo "<script>window.location.href='home.html';</script>";
}
?>