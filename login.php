<?php
include('dbConnect.php');
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$email=$_POST['email'];
$password=$_POST['password'];

$query = mysql_query("select * from products.myusers where password='$password' AND email='$email'");

$rows = mysql_num_rows($query);

$admincheck = mysql_query("select Account_status from products.myusers where password='$password' AND email='$email'");


if($rows['Account_status'] == 'Admin'){
    $_SESSION['isAdmin'] = 'Admin';
}

if ($rows == 1) {
$_SESSION['login_user']=$email;
$_SESSION['Account_status']=$admincheck;

header("location: index.php");
} else {
$error = "Username or Password is invalid";
}
}
}
?>                         