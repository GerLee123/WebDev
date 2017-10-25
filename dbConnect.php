<?php

$server = 'localhost';
$user = 'Ger';
$pass = 'ger123';
$db = 'products';

// Connect to Database
$connection = mysql_connect($server, $user, $pass)
or die ("Could not connect to server ... \n" . mysql_error ());
mysql_select_db($db)
or die ("Could not connect to database ... \n" . mysql_error ());



// get results from database

$result = mysql_query("SELECT * FROM products.game_info")

or die(mysql_error());

?>