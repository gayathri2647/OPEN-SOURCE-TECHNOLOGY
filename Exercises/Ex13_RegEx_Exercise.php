<?php
error_reporting(0);

$nameErr = $emailErr = $mobileErr = $passwordErr = "";
$name = $email = $mobile = $password = "";

if(isset($_POST['submit'])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    
    // Name (Only letters)
    if(!preg_match("/^[A-Za-z]+$/", $name)){
        $nameErr = "Only letters allowed";
    }

    // Email
    if(!preg_match("/^\w+@\w+\.\w+$/", $email)){
        $emailErr = "Invalid Email";
    }

    // Indian Mobile
    if(!preg_match("/^[6-9]\d{9}$/", $mobile)){
        $mobileErr = "Invalid Mobile Number";
    }

    // Password
    if(!preg_match("/^.{6,}$/", $password)){
        $passwordErr = "Password must be minimum 6 characters";
    }

    if($nameErr=="" && $emailErr=="" && $mobileErr=="" && $passwordErr==""){
        echo "<h3 style='color:green'>Registration Successful</h3>";
    }
}
?>

<h2>Registration Form</h2>

<form method="post" action="">
    Name: <input type="text" name="name"> 
    <span style="color:red"><?php echo $nameErr; ?></span><br><br>
    Email: <input type="text" name="email"> 
    <span style="color:red"><?php echo $emailErr; ?></span><br><br>
    Mobile: <input type="text" name="mobile"> 
    <span style="color:red"><?php echo $mobileErr; ?></span><br><br>
    Password: <input type="password" name="password"> 
    <span style="color:red"><?php echo $passwordErr; ?></span><br><br>
    <input type="submit" name="submit" value="Register">
</form>
