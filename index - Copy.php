<!DOCTYPE html>
<?php
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
<style type="text/css">
.mycontainer {
     background-image: url("images/bg.jpg");
     background-repeat: repeat;
    margin: auto;
}
.carousel{
    background: #ffffff;
    margin-top: 0px;
}
.carousel .item{
    min-height: 335px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
}
.bs-example{
}


.example3 .navbar-brand {
  height: 80px;
  
}
.navbar-static-top{
border: 0px solid;
    border-radius: 5px;
	}
	
.example3 .nav >li >a {
  padding-top: 30px;
  padding-bottom: 30px;
  padding-right:20px;
  padding-left:20px;
}
.example3 .navbar-toggle {
  padding: 10px;
  margin: 25px 15px 25px 0;
}

.navbar-form{
  padding-top: 15px;
  padding-bottom: 15px;
  }
  
.navbar-right {
    padding-right: 30px; 
}

#sidebar {
margin-left:-15px;
    background: #222222;
    color: #fff;
    transition: all 0.3s;
	border: 0px solid;
    border-radius: 5px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #222222;
	border: 0px solid;
    border-radius: 5px;
	text-align:center;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #ffffff;
}

#sidebar ul p {
    color: #7e9d9d;
    padding: 10px;
}

#sidebar ul li a {
	text-align:center;
    padding: 10px;
    font-size: 1.1em;
    display: block;
	color:#7e9d9d;
}
#sidebar ul li a:hover {
    color: #ffffff;
	    background: #080808;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #080808;
	text-align:center;
	}
ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #7e9d9d;
}

.dropdown-menu{
}
</style>
</head> 
<body>
<div class="mycontainer">
<div class="bs-example">


<div class="example3">
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Dispute Bills">
        </a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Games <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Xbox</a></li>
                        <li><a href="#">PS4</a></li>
                        <li><a href="#">Nintendo</a></li>
                        <li><a href="#">PS3</a></li>
                    </ul>
                </li>
				<li><a href="#">Wish List</a></li>
                <li><a href="#">Cart</a></li>

            </ul>
            <form class="navbar-form navbar-left">
            	<div class="input-group">
				<div class="leftt">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
            </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
	</div>

  </nav>









<div class="example3">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><img src="images/logo1.png"></a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Games <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Xbox</a></li>
                        <li><a href="#">PS4</a></li>
                        <li><a href="#">Nintendo</a></li>
                        <li><a href="#">PS3</a></li>
                    </ul>
                </li>
				<li><a href="#">Wish List</a></li>
                <li><a href="#">Cart</a></li>
            </ul>
            <form class="navbar-form navbar-left">
            	<div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
            </ul>
        </div>
		</div>
    </nav>
	
	
	
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
                <li class="active"><a href="#"><img src="images/xbox.png"></a></li>
                <li><a href="#"><img src="images/ps4.png"></a></li>
                <li><a href="#"><img src="images/nintendo.png"></a></li>
                <li><a href="#"><img src="images/ps3.png"</a></li>
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

            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="<?php echo $myimage?>" alt="<?php echo $myname?>">
                    <div class="caption">
                        <h2><?php echo $myname?></h2>
						<p><b>Platform : <?php echo $platform?></b> </p>
						<h3><b>€<?php echo $price?></b> </h3>
                        <p><a href="#" class="btn btn-primary">Add To Cart</a> <a href="#" class="btn btn-default">Add To </a></p>
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

</body>
</html>      