<?php
echo "<h2>PHP BASIC PROGRAM</h2><hr>";

//BASIC EXAMPLES

// Simple welcome message
echo "Welcome to PHP!";
echo "<br>";

// Printing multiple strings
echo "Hello ";
echo "World!";
echo "<br>";

// Printing HTML tags using PHP
echo "<h2>This is a heading</h2>";
echo "<p>This is a paragraph.</p>";
echo "<br>";

// Displaying a variable
$name = "Your Name";
echo "My name is $name.";
echo "<br>";

// Basic arithmetic operation
$a = 10;
$b = 20;
echo "Sum: " . ($a + $b);
echo "<br>";

// String concatenation
$first = "Open";
$second = "Source";
echo $first . " " . $second . " Technology";
echo "<br>";

// Single-quoted and double-quoted strings
echo 'This is single-quoted text.<br>';
echo "This is double-quoted text.";
echo "<br>";

// Printing multiple lines
echo "Line 1<br>";
echo "Line 2<br>";
echo "Line 3<br>";
echo "<br>";

// Escaping characters
echo "He said: \"PHP is easy!\"";
echo "<br>";

// Using print statement
print "This is printed using print statement.";
echo "<br><hr>";


// PHP DATA TYPE EXAMPLES

// 1. String
echo "<h3>1. String</h3>";
$name = "Yogeshwari";
echo $name;
echo "<br>";

// 2. Integer
echo "<h3>2. Integer</h3>";
$age = 25;
echo $age;
echo "<br>";

// 3. Float
echo "<h3>3. Float / Double</h3>";
$price = 99.75;
echo $price;
echo "<br>";

// 4. Boolean
echo "<h3>4. Boolean</h3>";
$isOnline = true;
echo $isOnline;   // Output: 1
echo "<br>";

// 5. Array
echo "<h3>5. Array</h3>";
$colors = array("Red", "Green", "Blue");
echo $colors[0];
echo "<br>";

// 6. Object
echo "<h3>6. Object</h3>";
class Student {
    public $name = "Priya";}
$obj = new Student();
echo $obj->name;
echo "<br>";

// 7. NULL
echo "<h3>7. NULL</h3>";
$val = null;
echo $val;  // No output
echo "<br>";

?>