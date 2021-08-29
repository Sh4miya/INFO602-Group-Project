<?php

$servername = "localhost";
$username = "adminL";
$password = "H8yASLa6gtgZrax"

$database = "assignment1";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn) {
    echo "success";
}
else {
    die("Failed to connect". mysqli_connect_error());
}

?>