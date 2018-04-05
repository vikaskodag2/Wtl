<?php

require 'connect.php';

if (array_key_exists('check_submit', $_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comments'];

    $tempsql = "SELECT * FROM comment;";
    $temp_result = $conn->query($tempsql);
    $rowcount = mysqli_num_rows($temp_result);
    $rowcount += 1;
    
    $sql = "INSERT INTO comment values (" . $rowcount . ",'" . $name . "', '" . $comment . "');";
    $result = $conn->query($sql);

    if($result) {
        echo "New record created successfully";
    } else {
        echo "Error:" . $conn->error;
    }

}
else {
    echo "There seems to be some problem while submitting.";
}

?>