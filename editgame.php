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
 	$myimage = mysql_real_escape_string($_POST["Game_image"]);
    $myname = mysql_real_escape_string($_POST["Game_name"]);
    $description = mysql_real_escape_string($_POST["Game_des"]);
    $price = mysql_real_escape_string($_POST["Game_price"]);
	$platform = mysql_real_escape_string($_POST["Platform"]);
    $releasedate = mysql_real_escape_string($_POST["Game_release"]);
	$id = mysql_real_escape_string($_POST["ID"]);

$sql = "UPDATE products.game_info SET Game_image = '$myimage', Game_name = '$myname', Game_des = '$description', Game_price ='$price', Platform ='$platform', Game_release ='$releasedate' WHERE ID = '$id'";

mysql_query($sql)or die(mysql_error());
if(mysql_affected_rows()>=1){
    echo "<p> Record Updated<p>";
}else{
    echo "<p>Not Updated<p>";
}

}
if(isset($_GET['id']))
{	
$console = $_GET['id'];

$query=mysql_query("SELECT * from products.game_info WHERE ID = '$console'");
}
else {
$query=mysql_query("SELECT * from products.game_info");

}
if(mysql_num_rows($query)>=1){
    while($row = mysql_fetch_array($query)) {
		$myimage = $row['Game_image'];
        $myname = $row['Game_name'];
        $description = $row['Game_des'];
        $price = $row['Game_price'];
		$platform = $row['Platform'];
		$id = $row['ID'];
		$releasedate= $row['Game_release'];
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

        <input type="text" name="Game_image" placeholder="<?php echo $myimage?>" value="<?=$myimage?>" id='img-upload'>

        <div class="form-group col-md-6 ">
            <label for="inputEmail">Name</label>
            <input type="text" name="Game_name" class="form-control" id="Game_name" value="<?=$myname?>" required>
	    </div>
		
        <div class="form-group col-md-6 ">
            <label for="inputEmail">Description</label>
            <input type="text" name="Game_des" class="form-control" id="Game_des" value="<?=$description?>" required>
		</div>
			
		<div class="form-group col-md-6 ">
            <label for="inputEmail">Price</label>
            <input type="text" name="Game_price" class="form-control" id="Game_price" value="<?=$price?>" required>
		</div>
			
	    <div class="form-group col-md-6 ">
            <label for="inputEmail">Platform</label>
            <input type="text" name="Platform" class="form-control" id="Platform" value="<?=$platform?>" required>
		</div>
		
		 <div class="form-group col-md-12 ">
            <label for="inputEmail">Release</label>
            <input type="date" name="Game_release" class="form-control" id="Game_release" value="<?=$releasedate?>" required>
								<input type="hidden" name="ID" value="<?=$id;?>">

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