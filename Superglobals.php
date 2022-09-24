<?php 

//Superglobals

/**
 * - COOKIES => $_COOKIE[]
 * - REQUEST => $_REQUEST[]
 * - POST  => $_POST[]
 * - GET => $_GET[] 
 * - SERVER => $_SERVER[]
 * - FILES => $_FILES[]
 * -  SESSION => $_SESSION[]
 * - $GLOBALS  => 
 */

 //2) For a given array of integer [2,45,789,5341,56,1], create 
//    a function that will count how many number that have even 
//    number of digits. (ans:3)

//getEvenDigits($arr)

//$GLOBALS

// $x = 4; //Global scope
// $y = 5;

// function sum(){
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
// }

// sum();
// echo $z;

// Local => Global => Superglobal

//COOKIES
// $name = 'spark';
// $value = 'This shoe is very good.';
// $duration = time() + (60*60*24);
// setcookie($name, $value, $duration, '/'); //Setting a cookie

// setcookie($name, $value, time() - (60*60*28), '/'); //unset cookie with past time

// //Retrieve the cookie isset();
// if(isset($_COOKIE['spark'])){
//    $coky = $_COOKIE['spark'];
//    echo $coky;
// }


//Server ()
echo "{$_SERVER['SERVER_NAME']}<br>";
echo "{$_SERVER['HTTP_HOST']}<br>";
echo "{$_SERVER['HTTP_USER_AGENT']}<br>";
echo "{$_SERVER['PHP_SELF']}<br>";
//echo "{$_SERVER['HTTP_REFERER']}<br>";
echo "{$_SERVER['SCRIPT_NAME']}<br>";


