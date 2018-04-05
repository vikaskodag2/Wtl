<?php
// include_once 'connect.php';

$servername = "localhost";
$username = "root";
$password = "1312";
$dbname = "Pizza";

$con=mysql_connect("$servername","$username","$password","$dbname"); 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  $postId = $_POST['id'];
//  mysql_select_db("pizzahut", $con);
 
 $names=mysql_query("SELECT itemName FROM items WHERE itemNo = $postId");
 $result=mysql_fetch_array($names);
 echo $result['itemName'];
 $itemn=$result['itemName'];
 
 $prices=mysql_query("SELECT itemPrice FROM items WHERE itemNo = $postId");
 $result=mysql_fetch_array($prices);
 $itemp=$result['itemPrice'];

	$sql="INSERT INTO orders VALUES ($postId,'$itemn',$itemp)";
 
if (!mysql_query($sql,$con))
  {
	die('Error: ' . mysql_error());
  }
 mysql_close($con);


// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 

//   $postId = $_POST['id'];
// //  mysql_select_db("Pizza", $con);
 


//  $names = mysql_query($conn, "SELECT itemName FROM items WHERE itemNo = $postId");

//  $result = mysql_fetch_array($names);
//  echo $result['itemName'];
//  $itemn = $result['itemName'];
 
//  $prices=mysql_query("SELECT itemPrice FROM items WHERE itemNo = $postId");
//  $result=mysql_fetch_array($prices);
//  $itemp=$result['Price'];

// 	$sql="INSERT INTO orders VALUES ($postId,'$itemn',$itemp)";
//  echo $sql;
// if (!mysql_query($sql,$con))
//   {
// 	die('Error: ' . mysql_error());
//   }
//  mysql_close($con)
?>