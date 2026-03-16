<h2>Registration Form</h2>

<form method="post" action="">

Name: <input type="text" name="name"><br><br>

Age: <input type="text" name="age"><br><br>

Email: <input type="text" name="email"><br><br>

Mobile: <input type="text" name="mobile"><br><br>

Password: <input type="password" name="password"><br><br>

<input type="submit" name="submit" value="Register">

</form>

<?php 

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
            
  
    if($name && $age && $email && $mobile && $password!="")
    {
        $valid = true;

        // Name validation
        if(!preg_match("/^[A-Za-z\. ]*$/",$name))
        {
            echo "<script>alert('Name must contain only letters');</script>";
            $valid = false;
        }

        // Age validation
        if(!preg_match("/^[0-9]{1,3}$/",$age))
        {
            echo "<script>alert('Invalid Age');</script>";
            $valid = false;
        }

        // Email validation
        if(!preg_match("/^\w+@\w+\.\w+$/",$email))
        {
            echo "<script>alert('Invalid Email');</script>";
            $valid = false;
        }

        // Mobile validation
        if(!preg_match("/^[6-9][0-9]{9}$/",$mobile))
        {
            echo "<script>alert('Invalid Mobile Number');</script>";
            $valid = false;
        }

        // Password validation
        if(strlen($password) < 6)
        {
            echo "<script>alert('Password must be minimum 6 characters');</script>";
            $valid = false;
        }

        // Success message
        if($valid)
        {
            echo "<script>alert('Registration Successful');</script>";
        }
  }
  else
    {
        echo "<script>alert('Please fill in all fields');</script>";
    }
}
?>