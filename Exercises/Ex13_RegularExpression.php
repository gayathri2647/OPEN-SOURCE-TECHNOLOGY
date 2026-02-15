<?php
// REGEX 
echo "<h2>Basic Regex Ex</h2>";

//preg_match()
$text = "Nothing is Forever";
if(preg_match("/Forever/", $text)){
    echo "preg_match: Match Found <br>";
}

//preg_match_all()
$marks = "Marks: 85, 90, 78";
preg_match_all("/\d+/", $marks, $m);
echo "preg_match_all: ";
print_r($m[0]);
echo "<br><br>";

//preg_replace()
$replace = preg_replace("/Healing/", "Comeback", "Healing is my revenge");
echo "preg_replace: " . $replace . "<br><br>";

//preg_split()
$split = preg_split("/\s+/", "I survived what I thought would destroy me");
echo "preg_split: ";
print_r($split);
echo "<br><br>";

//preg_grep()
$names = ["Charu","Kanna","Abi","Gayu"];
$rnames = preg_grep("/^R/", $names);
echo "preg_grep: ";
print_r($rnames);
echo "<br><br>";

// REGISTRATION FORM VALIDATION

$nameErr = $emailErr = $mobileErr = $passwordErr = "";
$name = $email = $mobile = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    // Name (Only letters)
    if(!preg_match("/^[A-Za-z]+$/", $name)){
        $nameErr = "Only letters allowed";
    }
    // Email (basic pattern)
    if(!preg_match("/^\w+@\w+\.\w+$/", $email)){
        $emailErr = "Invalid Email";
    }
    // Indian Mobile Number
    if(!preg_match("/^[6-9]\d{9}$/", $mobile)){
        $mobileErr = "Invalid Mobile Number";
    }
    // Password (Min 6 characters)
    if(!preg_match("/^.{6,}$/", $password)){
        $passwordErr = "Password must be minimum 6 characters";
    }
    if($nameErr=="" && $emailErr=="" && $mobileErr=="" && $passwordErr==""){
        echo "<h3 style='color:green'>Registration Successful</h3>";
    }
}
?>

<h2>Registration Form</h2>

<form method="post">
    Name: <input type="text" name="name"> 
    <span style="color:red"><?php echo $nameErr; ?></span><br><br>
    Email: <input type="text" name="email"> 
    <span style="color:red"><?php echo $emailErr; ?></span><br><br>
    Mobile: <input type="text" name="mobile"> 
    <span style="color:red"><?php echo $mobileErr; ?></span><br><br>
    Password: <input type="password" name="password"> 
    <span style="color:red"><?php echo $passwordErr; ?></span><br><br>
    <input type="submit" value="Register">
</form>
