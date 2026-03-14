<?php
session_start();

/* 1. If cookie exists but session doesn't → restore session */
if (!isset($_SESSION['username']) && isset($_COOKIE['username'])) {
    $_SESSION['username'] = $_COOKIE['username'];
}

/* 2. Save username */
if (isset($_POST['save'])) {
    $_SESSION['username'] = $_POST['username'];
    setcookie("username", $_POST['username'], time() + 3600, "/");
}

/* 3. Logout */
if (isset($_POST['logout'])) {
    session_destroy();
    setcookie("username", "", time() - 3600, "/");
    header("Location: demo.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session & Cookie Demo</title>
</head>
<body>

<?php if (isset($_SESSION['username'])): ?>

    <h2>Welcome <?php echo $_SESSION['username']; ?></h2>

    <form method="post">
        <button name="logout">Logout</button>
    </form>

<?php else: ?>

    <h2>Enter Username</h2>

    <form method="post">
        <input type="text" name="username" required>
        <br><br>
        <button name="save">Save</button>
    </form>

<?php endif; ?>

</body>
</html>