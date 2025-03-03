<?php
$user=$_POST['uname'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","","reciperushdb");
$query="select * from login where username='".$user."' and password='".$pass."'";
$res=mysqli_query($con,$query);
$rows=mysqli_num_rows($res);
if($rows==1)
header("Location: index.html");
//echo "login success";
else
echo "login failed";
?>

