<?php
require 'connect.php';

  $postId = $_POST['id'];
 mysql_select_db("pizzahut", $con);
 
 $names=mysql_query("SELECT itemName FROM items WHERE itemNo = $postId");
 $result=mysql_fetch_array($names);
 echo $result['itemName'];
 $itemn=$result['itemName'];
 
 $prices=mysql_query("SELECT Price FROM items WHERE itemNo = $postId");
 $result=mysql_fetch_array($prices);
 $itemp=$result['Price'];

	$sql="INSERT INTO orders VALUES ($postId,'$itemn',$itemp)";
 
if (!mysql_query($sql,$con))
  {
	die('Error: ' . mysql_error());
  }
 mysql_close($con)
?>