<?php
require 'connect.php'; 
 mysql_select_db("Pizza", $con);
 
$name=$_POST['name'];
$address=$_POST['address'];
$no=$_POST['number'];

$sql="INSERT INTO customer VALUES ('$name','$address',$no)";

if (!mysql_query($sql,$con)) {
  die('Error: ' . mysql_error());
}


echo "McDonalds,Welcomes you";
 mysql_close($con)

?>