<?php
$mail=$_GET['mail'];
$loc=$_GET['loc'];
$date=$_GET['date'];
$date=$_GET['date'];
$time=$_GET['time'];
$quan=$_GET['quan'];
$kg=$_GET['kg']; 
$conn=mysqli_connect("localhost","root","","products");
$prod=$_GET['prod'];
$query="select * from coffee where name='$prod'";
$connect=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($connect);
$price=$data['price'];
$result=$price*$quan;
echo $result;
?>