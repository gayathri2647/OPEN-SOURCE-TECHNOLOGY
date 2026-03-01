<?php
// REGEX 
echo "<h2>Basic Regex</h2>";

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
$rnames = preg_grep("/^K/", $names);
echo "preg_grep: ";
print_r($rnames);
echo "<br><br>";

?>