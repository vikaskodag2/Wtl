<!DOCTYPE php>
<!-- Website template by freewebsitetemplates.com -->
<head>
	<title>Burger Menu - McDonalds</title>
	<meta charset="utf-8">
	<link href="/CSS/style1.css" rel="stylesheet" type="text/css">
	<script src="MISC/jquery/jquery.min.js"></script>
	
	<script>
	function done()
	{
        alert("You paid the bill.\nYour order will be shipped to you by our 24*7 service...Thank you and Visit Again!!!");
	}
	</script>		
</head>
 <body>
	<div id="header">
		<div>
			<a href="index.php"><img class="logo" src="Images/mcdlogo.png" width="513" height="84" alt="" title=""></a>
			<a href="index.php"><img  src="Images/waitress.png" width="332" height="205" alt="" title=""></a>
			<ul class="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a class="active" >Menu</a>
				</li>

				<li>
					<a href="blog.php">Your Order</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div>
				<div>	

<?php
require 'connect.php';

echo "<table cellpadding=10 cellspacing=10 style='border: solid 0px black;'>";
echo "<tr><th>Item Name</th><th>Price/quantity</th></tr>";

	$sql = "SELECT * FROM orders";
	$result = $conn->query($sql);
	
$sum=0;
if ($result->num_rows > 0) 
{
	echo "<tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
		echo "<td>" .$row['itemName']. "</td>";	
		echo "<td>" .$row['itemPrice']. "</td></tr>";

		$value = $row['itemPrice'];
		   $sum += $value;	
    }

	echo "<h3><tr><td rowspan=2>***Total Bill is Rs. </td><td>" .$sum. "***</td></tr></h3>"; 
    echo "</table>";
} 
else 
{
    echo "You haven't order any item";
}

$conn->close();
?>

</div></div></div>

<div class="sidebar">
<h1>Click to Pay</h1>
			<ul>
				<li class="first">
 						<input id="bill" type="button" value="Pay Bill" onClick="done()">
				</li>
</ul></div></div></div>
</span> 
</body>
</html>

