<h2>Registration Form</h2>

<form method="post"action="">

Name: <input type="text" name="name"><br>

Age: <input type="text" name="age"><br>

Email: <input type="text" name="email"><br>

Mobile: <input type="text" name="mobile"><br>

Password: <input type="password" name="password"><br>

<input type="submit" name="submit" value="Register">

</form>


<?php

$nameErr = $ageErr = $emailErr = $mobileErr = $passwordErr = "";

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Name validation
    if(!preg_match("/^[A-Za-z]+$/",$name))
    {
        $nameErr = "Name must contain only letters";
    }

    // Age validation
    if(!preg_match("/^[0-9]{1,3}$/",$age))
    {
        $ageErr = "Invalid Age";
    }

    // Email validation
    if(!preg_match("/^\w+@\w+\.\w+$/",$email))
    {
        $emailErr = "Invalid Email";
    }

    // Mobile validation
    if(!preg_match("/^[6-9][0-9]{9}$/",$mobile))
    {
        $mobileErr = "Invalid Mobile Number";
    }

    // Password validation
    if(strlen($password) < 6)
    {
        $passwordErr = "Password must be minimum 6 characters";
    }

    if($nameErr=="" && $ageErr=="" && $emailErr=="" && $mobileErr=="" && $passwordErr=="")
    {
        echo "<h3>Registration Failed</h3>";
    }
    else
    {
        echo "<h3>Registration Successful</h3>";
    }
}

?>