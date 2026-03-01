<?php
// Create a Cookie (Valid for 1 hour)
setcookie("username", "DSA STUDENTS", time() + 3600, "/");
//Read Cookie
if(isset($_COOKIE["username"])) {
    echo "Cookie Value: " . $_COOKIE["username"];
} else {
    echo "Cookie not set. Please refresh page.";
}
// Delete Cookie 
//setcookie("username", "", time() - 3600, "/");
?>
