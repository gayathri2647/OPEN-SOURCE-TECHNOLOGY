<?php
echo "
<html>
<head>
<title>EX 2 Form</title>

<style>
    body { font-family: \"Times New Roman\", serif; margin: 20px; }
    h3 { text-align: center; }
    .container {
        width: 100%;
        max-width: 150mm; 
        margin: auto;
        background: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0px 0px 5px gray;
    }
    label { 
        font-weight: bold; 
        display: inline-block; 
        width: 150px; 
        margin: 5px 0; 
    }

    .section-title {
        background: #eee;
        padding: 6px;
        text-align: center;
        font-weight: bold;
        margin-top: 15px;
    }
    input[type=\"submit\"] {
        background: #007bff; 
        border: none;
        padding: 10px 20px;
        color: white;
        cursor: pointer;
        margin-top: 15px;
    }
</style>

<script>
function submitForm() {
    let name   = document.getElementById(\"name\").value;
    let mobile = document.getElementById(\"mobile\").value;
    let email  = document.getElementById(\"email\").value;

    alert(\"Form submitted successfully!\");
    return true;
}
</script>

</head>

<body>
<div class=\"container\">
<form>

    <div class=\"section-title\">STUDENT DETAILS</div>

    <label>Full Name:</label>
    <input type=\"text\" id=\"name\"><br>

    <label>Mobile No:</label>
    <input type=\"tel\" id=\"mobile\"><br>

    <label>DOB:</label>
    <input type=\"date\" id=\"dob\"><br>

    <label>Email:</label>
    <input type=\"email\" id=\"email\"><br>

    <label>Roll No:</label>
    <input type=\"number\" id=\"rollno\"><br>

    <input type=\"submit\" value=\"Submit\" onclick=\"return submitForm()\">
</form>
</div>

</body>
</html>";
?>
