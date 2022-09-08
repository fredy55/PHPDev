<?php 

//FUNCTIONS

/**
 * 1) Built-in 
 * 
 * 2) Custom (User-defined)
 */

//  function linus(){
//     //codes
//     echo 'Hello Linus!';
//  }

//  linus();

// function greetings($name)
// {
//     echo "Hello {$name}!<br>";
// }

// greetings('Chibuike');
// greetings('Mike');
// greetings('Nora');

// function sum($a, $b)
// {
//    $sum = $a + $b;
//    echo "The sum of {$a} and {$b} is: {$sum}<br>";
// }

// sum(3, 5);
// sum(23, 6);

//Return Type

// function findProduct(float $x, int &$y, $z = 2):float
// {
//    $product = $x * $y + $z;
//    return $product;
// }

// $n = 3;
// echo findProduct(3, $n);

$arr1 = array(1, 3, 4, 5, 8, 7, 4, 10, 14);

//Create a function to display all the even numbers in an array of integers

function evenNum(array $arr1)
{
    for($i=0; $i<count($arr1); $i++){
        if($arr1[$i]%2==0){
            echo '<h1>'.$arr1[$i].'</h1>';
        };
    }
}

evenNum($arr1);

