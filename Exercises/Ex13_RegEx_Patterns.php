<?php
echo "REGULAR EXPRESSIONS NOTATIONS<br><br>";

/*
-------------------------------------------------
ANCHORS (^ and $)
^  → Start of string
$  → End of string
-------------------------------------------------
*/

echo "1.Anchors<br>";

$text1 = "PHP";
echo preg_match("/^PHP$/", $text1);  

echo "<br>";


echo "2.Character Classes<br>";

// Match vowels
$text2 = "hello";
preg_match_all("/[aeiou]/", $text2, $matches);
print_r($matches[0]);  

// Range examples
echo preg_match("/[A-Z]/", "Hello");  

echo "<br>";

// Negation (NOT digits)
echo preg_match("/[^0-9]/", "123A");  

echo "<br>";

echo "3.Wildcard Dot<br>";

echo preg_match("/c.t/", "cat");  

echo "<br>";

echo "4.Quantifiers<br>";

// * → 0 or more
echo preg_match("/go*d/", "gd");  

echo "<br>";

// + → 1 or more
echo preg_match("/go+d/", "god");  

echo "<br>";

// ? → 0 or 1
echo preg_match("/colou?r/", "color");  

echo "<br>";

// {n} → Exact count
echo preg_match("/\d{4}/", "2026");  

echo "<br>";

// {n,m} → Range
echo preg_match("/\d{2,4}/", "123");  

echo "<br><br>";


echo "5.Predefined Character Sets<br>";

// \d → Digits
preg_match("/\d+/", "Age: 21", $m1);
print_r($m1);

// \w → Word characters
echo preg_match("/\w+/", "PHP_8");  

echo "<br>";

// \s → Whitespace
echo preg_match("/\s/", "Hello World");  

echo "<br><br>";

echo "6.Grouping<br>";

echo preg_match("/(ab)+/", "abab");  

echo "<br><br>";


echo "7.Alternation<br>";

echo preg_match("/cat|dog/", "I have a dog");  

echo "<br><br>";

echo "8.Escape Character<br>";

echo preg_match("/\./", "file.txt");  

echo "<br><br>";


echo "9.Word Boundary<br>";

echo preg_match("/\bPHP\b/", "PHP is easy");  

echo "<br>";

echo preg_match("/\bPHP\b/", "PHPMailer");  

echo "<br><br>";


echo "10.Lookahead<br>";

// Positive Lookahead (?=...)
$text3 = "Weight is 50kg";
preg_match("/\d+(?=kg)/", $text3, $match);
print_r($match);

echo "<br>";

// Negative Lookahead (?!...)
echo preg_match("/Java(?!Script)/", "Java");       

echo "<br>";

echo preg_match("/Java(?!Script)/", "JavaScript"); 

echo "<br><br>";


echo "Common Patterns<br>";

// Only letters
echo preg_match("/^[A-Za-z]+$/", "Hello");  

echo "<br>";

// Only digits
echo preg_match("/^[0-9]+$/", "12345");  

echo "<br>";

// Indian mobile number (10 digits starting 6-9)
echo preg_match("/^[6-9]\d{9}$/", "9876543210");  

echo "<br>";

// Basic email
echo preg_match("/^\w+@\w+\.\w+$/", "test@gmail.com");  

echo "<br>";

// 4 digit PIN / OTP
echo preg_match("/^\d{4}$/", "1234");  

echo "<br>";

?>
