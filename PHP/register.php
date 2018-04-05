<?php
require 'connect.php';

$firstname = $_POST['first'];
$lastname = $_POST['last'];
$pwd = $_POST['password'];
$email = $_POST['email'];
$mobno = $_POST['mobile'];

$sql = "INSERT INTO user VALUES ('" . $firstname . $lastname ."', '" . $email ."', '" . $pwd . "'";

$result = $conn->query($sql);

if($result) {
    echo "New record created successfully";
    header("Location: http://localhost/App");
} else {
    echo "Error:" . $conn->error;
}


?>