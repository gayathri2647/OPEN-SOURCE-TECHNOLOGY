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
        <input type=\"submit\" value=\"Submit\" onclick='myfunction()'>
    </form>
</body>
<script>
    function myfunction() {
        let x = document.getElementById(\"name\").value;
        document.write(\"<h3>Welcome  to our College! \" + x + \"</h3>\");
    }
</script>
</html>";
?>