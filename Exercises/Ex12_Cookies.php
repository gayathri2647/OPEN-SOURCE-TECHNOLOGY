<?php
// Create a Cookie (Valid for 1 hour)
setcookie("username", "gayu", time() + 3600, "/");
//Read Cookie
$_COOKIE["username"]
// Delete Cookie (Uncomment below line if needed)
//setcookie("username", "", time() - 3600, "/");
?>
