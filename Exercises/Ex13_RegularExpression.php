<?php

$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $skills = $_POST["skills"];

    $errors = [];

    // 1. Name → Only letters (Anchors + Character class)
    if (!preg_match("/^[A-Za-z ]+$/", $name)) {
        $errors[] = "Name should contain only letters.";
    }

    // 2. Email → Basic pattern
    if (!preg_match("/^\w+@\w+\.\w+$/", $email)) {
        $errors[] = "Invalid Email format.";
    }

    // 3. Mobile → Indian number (10 digits starting 6-9)
    if (!preg_match("/^[6-9]\d{9}$/", $mobile)) {
        $errors[] = "Invalid Mobile Number.";
    }

    // 4. Extract numbers from skills using preg_match_all
    preg_match_all("/\d+/", $skills, $numbers);

    // 5. Replace extra spaces using preg_replace
    $skills_clean = preg_replace("/\s+/", " ", $skills);

    // 6. Split skills using comma (preg_split)
    $skills_array = preg_split("/\s*,\s*/", $skills_clean);

    // 7. Filter skills starting with P (preg_grep)
    $p_skills = preg_grep("/^P/i", $skills_array);

    if (empty($errors)) {
        $result .= "<h3 style='color:green'>Registration Successful</h3>";
        $result .= "Clean Skills: " . $skills_clean . "<br><br>";

        $result .= "All Skills:<br>";
        print_r($skills_array);

        $result .= "<br><br>Skills Starting with P:<br>";
        print_r($p_skills);

        $result .= "<br><br>Numbers Found in Skills:<br>";
        print_r($numbers[0]);
    } else {
        $result .= "<h3 style='color:red'>Errors:</h3>";
        foreach ($errors as $e) {
            $result .= $e . "<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="POST">

Name: <input type="text" name="name" required><br><br>

Email: <input type="text" name="email" required><br><br>

Mobile: <input type="text" name="mobile" required><br><br>

Skills (Example: PHP, Python3, Java):<br>
<input type="text" name="skills"><br><br>

<input type="submit" value="Register">

</form>

<br>
<?php echo $result; ?>

</body>
</html>