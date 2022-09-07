<?php 

//Loops

/**
 * for
 * 
 * foreach
 * 
 * while
 * 
 * do...while
 */

 //Initializer
 //counter
 //condition

 for($x=1; $x<11; $x++){
    if($x%3==0){
        echo '<h1>Count is: '.$x.'</h1>'; //multiples of 3
    }
 }

//  //Initializer
//  $x=1;

// while ($x <= 10) //condition
// {
//     # code...
//     echo '<h1>Count is: '.$x.'</h1>'; 
    
//     //counter
//     $x++;
// }

//  //Initializer
//  $x=1;

// do{
//     # code...
//     echo '<h1>Count is: '.$x.'</h1>'; 
    
//     //counter
//     $x++;
// }while ($x <= 10); //condition

//Loop controls

/**
 * Break
 * 
 * continue
 */

 for($x=1; $x<11; $x++){
      
    if($x==5){
        continue; //skip
    }
        
    echo '<h1>Count is: '.$x.'</h1>';
 }