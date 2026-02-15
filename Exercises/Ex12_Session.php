<?php
// Start the session 
session_start();
// Set Session Variable
$_SESSION["username"] = "Gayu";
// Access Session Variable
echo "Session Value is: " . $_SESSION["username"];
// Destroy Session 
// session_destroy();
?>
