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
		include("notlogged.php");
?>
	
	<div class="container">
    <div class="row">
	        <div class="col-xs-2">

        <nav id="sidebar">
            <!-- Sidebar Header -->
            <div class="sidebar-header">
                <h3>Platform</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active"><a href="games.php?platform=Xbox"><img src="images/xbox.png"></a></li>
                <li><a href="games.php?platform=PS4"><img src="images/ps4.png"></a></li>
                <li><a href="games.php?platform=Nintendo"><img src="images/nintendo.png"></a></li>
                <li><a href="games.php?platform=PS3"><img src="images/ps3.png"</a></li>
            </ul>
        </nav>
		
        </div>
	
	
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
	<?php 
	
	if(isset($_GET['platform']))
{	
$console = $_GET['platform'];

$query=mysql_query("SELECT * from products.game_info WHERE platform = '$console'");
}
else {
$query=mysql_query("SELECT * from products.game_info");

}

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
                        <p><a href="#" class="btn btn-primary">Add To Cart</a> <a href="#" class="btn btn-default">Add To Basket </a></p>
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
				<a href="#">Forgot Password?</a>
			</div>
		</div>
	</div>
</div>  
  <footer id="myFooter">
        <div class="container">
            <ul>
                <li><a href="#">Company Information</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Terms of service</a></li>
            </ul>
        <p class="footer-copyright">© 2016 Copyright Text</p>
        </div>

    </footer>
</body>
</html>      