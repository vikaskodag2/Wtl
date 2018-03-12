<?php

//making connection to the databse using this file.
require 'connect.php'

//replace with the name of the table containig comments.
$table_name = "abc";

//fetching comments from database.
$sql = "SELECT user_name, comment FROM " . $table_name . " LIMIT 4";
$result = $conn->query($sql);

$result_array = array();

//pushing the result from query to an array result_array.
if($result -> num_rows > 0) {
	while($row = $result -> fetch_assoc()) {
		array_push($result_array, $row);
	}
}

//sending a json encoded array to the client.
echo json_encode($result_array);

$conn -> close();

?>