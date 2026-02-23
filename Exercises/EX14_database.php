<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "school_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo "Connection failed";
}
else {
    echo "Server Connected Successfully";
}
?>
