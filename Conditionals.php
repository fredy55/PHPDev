<?php 

/**
 * if
 * if...else
 * if...elseif...else
 * switch
 */
$n = 7;
$m = 6;

//  if ($n-$m) {
//     echo '<h1>The condition is true.</h1>';
//  }

//  if ($n===$m) {
//     echo '<h1>The condition is true.</h1>';
//  }elseif($n==$m){
//     echo '<h1>The condition is false.</h1>';
//  }else{
//     echo '<h1>Invalid entry.</h1>';
//  }

 
//  $d =3;
//  $f = 10;
 
//  if($d==$f || $f<$d){
//     echo '<h1>Equal Values</h1>';
//  }elseif($f<$d){
//     echo'<h1>Second value bigger.</h1>';
//  }elseif($d<$f){
//     echo'<h1>first value bigger.</h1>';
//  }else{
//     echo '<h1>None equal values.</h1>';
//  }

 //Switch
$state = 2; //0, 1, 2, 3

switch ($state) {
    case 0:
        echo '<h1>Off</h1>';
        break;
    case 1:
        echo '<h1>On</h1>';
        break;
    case 2:
    case 4:
        if(false){
            echo '<h1>Paused</h1>';
        }
        break;
    case 3:
        echo '<h1>Stopped</h1>';
        break;
    default:
        echo '<h1>Invalid Input</h1>';
        break;
}




 
 