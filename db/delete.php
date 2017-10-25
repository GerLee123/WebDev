 <?php

 if (isset($_GET["id"])){
$UID = (int)$_GET['id'];
    $query="DELETE FROM myDB.Residents WHERE ID='$UID'";


mysql_query($query)or die(mysql_error());
if(mysql_affected_rows()>=1){
    echo "<p>User Deleted<p>";
}else{
    echo "<p>User Not Deleted<p>";
}
    }

?>