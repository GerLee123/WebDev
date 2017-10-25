<!DOCTYPE html>
<?php
// define whether this page requires login
define('SECURE_PAGE', true);

// start session
session_start();

// is login required on this page
if((defined('SECURE_PAGE')) && (SECURE_PAGE == true))
{
    // if the user logged in
    if($_SESSION['login_user'] != true)
    {
        // not logged in, redirect to login page
        header('location: index.php');
        exit;
    }
}


?>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GS Gaming - Profile</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/upload.js"></script>

<link rel="stylesheet" href="css/custom.css">


</style>
</head> 
<body>
<div class="mycontainer">
<div class="bs-example">

<?php 
include('notlogged.php');
?>
	
	 
	<div class="container">   

	<div class="row">
<?php
include('dbConnect.php');

 if (isset($_POST["submit"])){
 	$profilepic = mysql_real_escape_string($_POST["Account_image"]);
    $firstname = mysql_real_escape_string($_POST["firstname"]);
    $lastname = mysql_real_escape_string($_POST["lastname"]);
    $email = mysql_real_escape_string($_POST["email"]);
	$address = mysql_real_escape_string($_POST["Address"]);
    $password = mysql_real_escape_string($_POST["password"]);
	$id = mysql_real_escape_string($_POST["id"]);

$sql = "UPDATE products.myusers SET firstname = '$firstname', lastname = '$lastname', email = '$email', password ='$password', Address ='$address', Account_image ='$profilepic' WHERE id = '$id'";

mysql_query($sql)or die(mysql_error());
if(mysql_affected_rows()>=1){
    echo "<p> Record Updated<p>";
}else{
    echo "<p>Not Updated<p>";
}

}

$user_check=$_SESSION['login_user'];

$query=mysql_query("SELECT * from products.myusers where email='$user_check'");

if(mysql_num_rows($query)>=1){
    while($row = mysql_fetch_array($query)) {
        $profilepic = $row['Account_image'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
		$password = $row['password'];
        $email = $row['email'];
		$address = $row['Address'];
		$id = $row['id'];
	}
	}
	
?>


	<div class="container">   

	<div class="row">

            <div class="col-md-12 registerform">
                <div class="thumbnail">
				<br>
				
<form action="" method="post">
					<input type="hidden" name="id" value="<?=$id;?>">

        <input type="text" name="Account_image" placeholder="<?php echo $profilepic?>" value="<?=$profilepic?>" id='img-upload'>

        <div class="form-group col-md-6 ">
            <label for="inputEmail">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="<?=$email?>" readonly>
	    </div>
		
        <div class="form-group col-md-6 ">
            <label for="inputEmail">Password</label>
            <input type="password" name="password" class="form-control" id="password" value="<?=$password?>" required>
		</div>
			
		<div class="form-group col-md-6 ">
            <label for="inputEmail">Firstname</label>
            <input type="text" name="firstname" class="form-control" id="firstname" value="<?=$firstname?>" required>
		</div>
			
	    <div class="form-group col-md-6 ">
            <label for="inputEmail">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="lastname" value="<?=$lastname?>" required>
		</div>
		
		 <div class="form-group col-md-12 ">
            <label for="inputEmail">Address</label>
            <input type="text" name="Address" class="form-control" id="address" value="<?=$address?>" required>
			<input type="hidden" name="Account_status" class="form-control" value="User" id="Account_status">

        </div>
			<input class="btn btn-primary regsubmit" name="submit" class="button" type="Submit">
</form>
                </div>
            </div>
			</div>
</div>


            </div>
</div>
</div>		</div> 
  <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">Ger & Ste's Gaming Site
      </p>
      <?php if(!isset($_SESSION['login_user'])){ ?>	
<a href="register.php" class="navbar-btn btn-danger btn pull-right">Click here to Register!</a>
<?php } ?>
    
        </div>

  </div>





</body>
</html>      