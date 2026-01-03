<?php
echo "
<html>
<head>
    <title>Form</title>
</head>
<body>
    <h3><ins>FORM</ins></h3>
    <form>
        <input type=\"text\" id=\"name\" placeholder=\"Enter Full Name\" required>
        <input type=\"email\" id=\"email\" placeholder=\"Enter Email\" required>
        <input type=\"number\" id=\"age\" placeholder=\"Enter Age\" required>
        <input type=\"submit\" value=\"Submit\" onclick='myfunction()'>
    </form>
</body>
<script>
    function myfunction() {
        let x = document.getElementById(\"name\").value;
        let y = document.getElementById(\"email\").value;
        let z = document.getElementById(\"age\").value;
        document.write(\"<h3>Welcome  to our College! \" + x + \"</h3>\");
        alert(\"Form Submitted Successfully!\");
    }
</script>
</html>";
?>