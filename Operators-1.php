<?php 
//Assignment Operators
//$x = 4;
//$y =3;
//$y = $y+2;
//$y += 2;

//$y = $y-2;
//$y -= 2;
//$x /= 2; //$x/2
//$y *= 2; //$y*2
//$y %= 2;


//Comparison
//$z = $x == $y; //Equal
//$z = $x === $y; //Identical
//$z = $x != $y; // Not equal
//$z = $x !== $y; // Not equal
//$z = $x <> $y; // Not equal
//$z = $x < $y; // Less than or graeter than
//$z = $x >= $y; // Less than or equal


//Decrement/Increment

//++$x; //$x+1
//--$x;

//Logical Operators
//$x = 3;
//$y = 4;
//$v = 1;
//$z = $x>$y || $y>=$v;
//$z = $x<$y && $y>=$v;

//String 
$name = 'John Wick ';
$action = 'shooting';

$msg = '';
$msg .= $name;
$msg .= ' is ';
$msg .= $action;
$msg .= '
  <b>bad guys in an action Movie.</b>
';

//echo $msg; //Concatenation

//Conditional Assignment
$x = 3;
$y = 4;
$v = 453;

//$z = $x == $y ? true : false; //tenary
//$z = $x != $y ? 100 : 5; //tenary

$z = $v ?? 'No value found!';

echo $z;




//DRY - Don't Repeat Yourself (Write Once, Use many) - OOP

//KISS - Keep It Simple and Stupid