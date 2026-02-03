<?php
session_start();

/* Set Cookie & Session */
if (isset($_POST["save"])) {
    // Session (secure)
    $_SESSION["username"] = $_POST["username"];

    // Cookie (stored in browser for 1 hour)
    setcookie("username", $_POST["username"], time() + 3600);
    echo "<script>alert('Username saved: " . $_POST["username"] . "');</script>";
}

/* Delete Cookie & Session */
else if (isset($_POST["logout"])) {
    echo "<script>alert(' logged out successfully');</script>";
    session_destroy();
    setcookie("username", "", time() - 3600);
}
else{
    header("Location: Ex12_Cookies_Session.php");
    exit();
}
?>
