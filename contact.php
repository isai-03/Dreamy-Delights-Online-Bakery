<?php
session_start();
        $name=$_POST['user'];
        $mail=$_POST['email'];
        $query=$_POST['query'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$sql="insert into contact(name,email,query) values ('$name','$mail','$query')";
if($con->query($sql)==TRUE)
{echo "<script>window.location.href='index.html';</script>";}
    else{
        echo"error";
}