<?php
$servername='localhost';
$username='root';  
$databasename='phpproject';
$password='';
//building Connection
$conn = mysql_connect($servername, $username, $password) or die("Error".mysql_error($conn));
//Selecting Database
$db=mysql_select_db($databasename,$conn) or die("Error".mysql_error($conn));
//Build the query
?>
