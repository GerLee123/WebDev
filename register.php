<!DOCTYPE html>
<?php
session_start();
include('dbConnect.php');
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
<div class="mycontainer">
<div class="bs-example">

<?php 
	
	if(isset($_SESSION['login_user']))
{	
include('loggedinmenu.php');
}
else {
include('notlogged.php');

}
?>
	
	<div class="container">
    <div class="row">
	        <div class="col-xs-2">

        <nav id="sidebar">
            <!-- Sidebar Header -->
            <div class="sidebar-header">
                <h3>Platform</h3>
            </div>

            <!-- Sidebar Links -->
            <ul class="list-unstyled components">
                <li class="active"><a href="games.php?platform=Xbox"><img src="images/xbox.png"></a></li>
                <li><a href="games.php?platform=PS4"><img src="images/ps4.png"></a></li>
                <li><a href="games.php?platform=Nintendo"><img src="images/nintendo.png"></a></li>
                <li><a href="games.php?platform=PS3"><img src="images/ps3.png"</a></li>
            </ul>
        </nav>
		
        </div>
	
	
        <!--/ .row thunbnails-->
        <div class="col-xs-10 pa-bottom">
            <div id="myCarousel" class="carousel slide"  data-ride="carousel">
                <!-- Carousel start -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="images/slide1.png" alt="business" class="" contenteditable="false">
                    </div>
                    <div class="item" style="">
                        <img src="images/slide2.png" alt="business" class="">
                    </div>
                    <div class="item" style="">
                        <img src="images/slide3.png" alt="business" class="">
                    </div>
                </div>	<a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="pos-top">‹</span></a>

                <a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="pos-top">›</span>

                    </a>
            </div>
            <!--/ Carousel End -->
        </div>
        <!--/ .col-md-8 -->
   
      <!--/ .col-md-4 -->
    </div>
  <!--/ .row thunbnails-->
  <br>
  </div>
<!--/ .row promo teaser--> 

	<div class="container">   

	<div class="row">

            <div class="col-md-12 registerform">
                <div class="thumbnail">
				<br>
				
				<?php


if (isset($_POST['adduser'])) {
if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password'])|| empty($_POST['address'])|| empty($_POST['Account_Status'])) {
$error = "Information has not been filled out completely";
echo $error;
}
else
{
	$firstname = mysql_real_escape_string($_POST["firstname"]);
    $lastname = mysql_real_escape_string($_POST["lastname"]);
    $email = mysql_real_escape_string($_POST["email"]);
    $password = mysql_real_escape_string($_POST["password"]);
	$address = mysql_real_escape_string($_POST["address"]);
    $status = mysql_real_escape_string($_POST["Account_status"]);


    $query="INSERT INTO products.myusers
            SET firstname = '$firstname', lastname = '$lastname', email = '$email', password ='$password', address ='$address', Account_status ='$status'";


mysql_query($query)or die(mysql_error());
if(mysql_affected_rows()>=1){
    echo "<p>Account Created<p>";
}else{
    echo "<p>User Not Updated<p>";
}
}
}
?>
<form action="" method="post">
        <div class="form-group col-md-6 ">
            <label for="inputEmail">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
	    </div>
		
        <div class="form-group col-md-6 ">
            <label for="inputEmail">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
		</div>
			
		<div class="form-group col-md-6 ">
            <label for="inputEmail">Firstname</label>
            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" required>
		</div>
			
	    <div class="form-group col-md-6 ">
            <label for="inputEmail">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" required>
		</div>
		
		 <div class="form-group col-md-12 ">
            <label for="inputEmail">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
			<input type="hidden" name="Account_status" class="form-control" value="User" id="Account_status">

        </div>
			<input class="btn btn-primary regsubmit" name="adduser" class="button" type="Submit">
</form>
                </div>
            </div>
			</div>

			
			
	
</div>
</div>

</div>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Member Login</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="login.php" method="post">
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
				
			</div>
			<div class="modal-footer">
				<a href="register.php">Register</a>
				<a href="#">Forgot Password?</a>

			</div>
		</div>
	</div>
</div>    <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">© 2014 - Site Built By Mr. M.
           <a href="http://tinyurl.com/tbvalid" target="_blank" >HTML 5 Validation</a>
      </p>
      
      <a href="http://youtu.be/zJahlKPCL9g" class="navbar-btn btn-danger btn pull-right">
      <span class="glyphicon glyphicon-star"></span>  Subscribe on YouTube</a>
    </div>
    
    
  </div>
</body>
</html>      