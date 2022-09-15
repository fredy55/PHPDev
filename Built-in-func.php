<?php 

//Strings

$str1 = "hello world! Welcome to PHP!";
//$str2 = strlen($str1); //Length of string
//$str2 = str_word_count($str1); //count the words in a string
//$str2 = strrev($str1); //reverse a string
//$str2 = strpos($str1, "welcome"); //String position
//$str2 = str_replace("world", "Mike", $str1); //string replacement
//$str2 = explode(" ", $str1); //covert string to array

//var_dump($str2);

//$str3 = implode(" ", $str2);//covert array to string

//$str2 = strtoupper($str1); //convert string to uppercase
//$str2 = strtolower($str1); //convert string to lowercase
//$str2 = ucfirst($str1); //Sentence case
//$str2 = ucwords($str1); //capitalize
//$str2 = trim($str1, "hel!PH"); //Remove characters from both ends
$str2 = strpos($str1, "Welcome");
$str3 = substr($str1, $str2);

echo "<h1>{$str3}</h1>";