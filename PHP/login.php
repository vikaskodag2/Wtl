<?php
	require 'connect.php';
 
	$id = $_POST['username'];
	$pass = $_POST['password'];
    
    // !!!!!!! change table name before running !!!!!!!
	$sql="INSERT INTO Login VALUES ('$id', '$pass')";

	if (!mysql_query($sql,$con)) {
	  die('Error: ' . mysql_error());
	}
	echo "McDonalds,Welcomes you " .$id;
    
    mysql_close($con)
?>
