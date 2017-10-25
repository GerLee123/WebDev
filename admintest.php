<!DOCTYPE html>
<?php
session_start();
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



if ($rows == 1) {
$_SESSION['login_user']=$email;

} else {
$error = "Username or Password is invalid";
}
}
}
?>                         

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GS Gaming</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/custom.css">

</style>
</head> 
<body>			
	<form action="" method="post">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text" class="form-control" placeholder="Username" name = "email" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" placeholder="Password" name = "password" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary btn-block btn-lg" value="Login">
					</div>
				</form>		
				
<?php if(isset($_SESSION['login_user'])){
	  if(($_SESSION['Account_status'] != 'Admin')){
header("location: index.php");
		} }
	  if(($_SESSION['Account_status'] == 'Admin')){
echo "Admin user";
}
 ?>
    
        </div>

  </div>
</body>
</html>      