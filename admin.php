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
<?php if(isset($_SESSION['login_user']) || ($_SESSION['isAdmin'] == 'Admin') ){
 ?>
	  
	  
	  
<div class="mycontainer">
<div class="bs-example">

<?php 
include('notlogged.php');
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
		
 <?php

 if (isset($_GET["delete"])){
$UID = (int)$_GET['delete'];
    $query="DELETE FROM products.myusers WHERE ID='$UID'";


mysql_query($query)or die(mysql_error());
if(mysql_affected_rows()>=1){
    echo "<p>User Deleted<p>";
}else{
    echo "<p>User Not Deleted<p>";
}
    }

?>

	<div class="row">

            <div class="col-md-12 registerform">
                <div class="thumbnail">
				
				<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#show">Show Users</button>
  <div id="show" class="collapse">
	<h2 class="h2left">User Database</h2>
	
	<?php

$result = mysql_query("SELECT * from products.myusers");


// display data in table
echo "<table border='0' class='table' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>Email</th> <th>Password</th><th>Address</th><th>Account_Status</th><th>Delete</th></tr>";



// loop through results of database query, displaying them in the table

while($row = mysql_fetch_array($result)) {

// echo out the contents of each row into a table

echo "<tr>";
echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['firstname'] . '</td>';
echo '<td>' . $row['lastname'] . '</td>';
echo '<td>' . $row['email'] . '</td>';
echo '<td>' . $row['password'] . '</td>';
echo '<td>' . $row['Address'] . '</td>';
echo '<td>' . $row['Account_status'] . '</td>';
echo '<td> <a href="?delete=' . $row['id'] . '">Delete</a></td>';



echo "</tr>";

}
echo "</table>";
?>
<br>
</div>
</div>
</div>
</div>


</div>


	<div class="container">   

	<div class="row">

            <div class="col-md-12 registerform">
                <div class="thumbnail">
				
								<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#create">Create User</button>
  <div id="create" class="collapse">
	<h2 class="h2left">Create User</h2>
				
				<?php


if (isset($_POST['adduser'])) {
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
			<div class="radio">
			<label><input type="radio" name="Account_status" value="User">User</label>
			<label><input type="radio" name="Account_status" value="Admin">Admin</label>
</div>

        </div>
			<input class="btn btn-primary regsubmit" name="adduser" class="button" type="Submit">
</form>
                </div>
            </div>
			</div>

			
			
			
	</div>
</div>
</div>





	<div class="container">   
	                <div class="thumbnail">

<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#editgames">Edit Games</button>
  <div id="editgames" class="collapse">
	<div class="row">
	<br>
	 <?php

 if (isset($_GET["deletegame"])){
$UID = (int)$_GET['deletegame'];
    $query="DELETE FROM products.game_info WHERE ID='$UID'";


mysql_query($query)or die(mysql_error());
if(mysql_affected_rows()>=1){
    echo "<p>Game Deleted<p>";
}else{
    echo "<p>Game Not Deleted<p>";
}
    }

?>
	<?php 
	
$query=mysql_query("SELECT * from products.game_info");

if(mysql_num_rows($query)){
    while($row = mysql_fetch_array($query)) {
        $myimage = $row['Game_image'];
        $myname = $row['Game_name'];
        $description = $row['Game_des'];
        $price = $row['Game_price'];
		$platform = $row['Platform'];
		$id = $row['ID'];
	?>

            <div class="col-md-4">
                <div class="thumbnail">
				<br>
                    <img src="<?php echo $myimage?>" alt="<?php echo $myname?>">
                    <div class="caption">
                        <h2><?php echo $myname?></h2>
						<p><b>Platform : <?php echo $platform?></b> </p>
						<h3><b>€<?php echo $price?></b> </h3>
                        <p><a href="editgame.php?id=<?php echo $id?>" class="btn btn-primary">Edit Game</a> <a href="?deletegame=<?php echo $id?>" class="btn btn-default">Delete Game </a></p>
                    </div>
                </div>
            </div>
			<?php 
			}
			} 
			?>
			
			
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
				
			</div>
			<div class="modal-footer">
				<a href="register.php">Register an Account</a>
				<br><br>
				<a href="#">Forgot Password?</a>

			</div>
		</div>
	</div>
</div>    <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">Ger & Ste's Gaming Site - Welcome <?php echo $_SESSION['login_user']?>
      </p>
      <?php if(!isset($_SESSION['login_user'])){ ?>	
<a href="register.php" class="navbar-btn btn-danger btn pull-right">Click here to Register!</a>
<?php } ?>

    <?php } else {
		header("location: index.php");
		}
		?>

        </div>

  </div>
</body>
</html>      