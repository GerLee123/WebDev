
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
                <li class="active"><a href="index.php">Home</a></li>
				
				
				<?php if(isset($_SESSION['login_user'])){?>
				
                <li><a href="profile.php">Profile</a></li>
				<?php }?>
				
				<?php if(isset($_SESSION['login_user'])){
							if(($_SESSION['Account_status'] == 'Admin')){
				
				?>
                <li><a href="admin.php">Admin</a></li>
				<?php } } ?>
				
				
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Games <b class="caret"></b></a>
                    <ul class="dropdown-menu">
						<li><a href="games.php">All Games</a></li>
                        <li><a href="games.php?platform=Xbox">Xbox</a></li>
                        <li><a href="games.php?platform=PS4">PS4</a></li>
                        <li><a href="games.php?platform=Nintendo">Nintendo</a></li>
                        <li><a href="games.php?platform=PS3">PS3</a></li>
                    </ul>
                </li>
				<?php if(isset($_SESSION['login_user'])){?>
                <li><a href="#">Cart</a></li>
				<?php } ?>
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
			
				<?php if(!isset($_SESSION['login_user'])){?>
                <li><a href="#myModal" class="trigger-btn" data-toggle="modal">Login</a></li>
				<?php } ?>
				
				<?php if(isset($_SESSION['login_user'])){?>
                <li><a href="logout.php">Logout</a></li>
				<?php } ?>
            </ul>
        </div>
		</div>
    </nav>