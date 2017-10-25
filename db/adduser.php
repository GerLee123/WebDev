
<?php

include('dbConnect.php');


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
    echo "<p> User Added<p>";
}else{
    echo "<p>User Not Updated<p>";
}
?>