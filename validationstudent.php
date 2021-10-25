<?php
session_start();
$username=$_POST['user'];
$password=$_POST['pass'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'stu_login');
$q="select * from d2library user='$username' && pass='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{

header('location:http://localhost/dtask/Search_book_stu.php');
}
else
{
header('location:http://localhost/dtask/Search_book_stu.php'); 
}
?>