<?php
session_start();
include('dbConnect.php');
include('login.php');


if (isset($_POST['addtocart'])) {
	$userid = mysql_real_escape_string($_POST["User_id"]);
    $gameid = mysql_real_escape_string($_POST["Game_id"]);
    $totalprice = mysql_real_escape_string($_POST["Total_price"]);


    $query="INSERT INTO products.cart
            SET User_id = '$userid', Game_id = '$gameid', Total_price = '$totalprice'";


mysql_query($query)or die(mysql_error());
if(mysql_affected_rows()>=1){
    echo "<p>Added to Cart<p>";
}else{
    echo "<p>Not added to cart<p>";
}
}
?>
<form action="" method="post">
            <input type="hidden" name="User_id" value="<?php $_SESSION['login_user']?>" id="User_id"/>
            <input type="hidden" name="Game_id" value="<?=$id;?>" id="Game_id"/>
            <input type="text" name="firstname" value="<?=$id;?>" id="Total_price"/>
		<input class="btn btn-primary regsubmit" name="addtocart" class="button" type="Submit">
</form>