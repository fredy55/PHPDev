<?php 

//ARRAYS

/**
 * 1) Indexed - index 
 * 
 * 2) Associate - key=>values
 * 
 * 3) Multidimensional - mixed
 */

 //Indexed Arrays
//  $arr1 = array(1, 2, 42, 5, 7);
//  $arr2 = ['Ike', 'Mary', 'Chisom', 'Clems'];
//  $arr3 = [];
//  $arr3[0] = 4.7;
//  $arr3[1] = 1.5;
//  $arr3[2] = 2.0;
//  $arr3[3] = 5.1;

// //var_dump( $arr3);

// //echo $arr2[1];

// //Get the length of array
$arrLen = count($arr2);

// for($x=0; $x<$arrLen; $x++){
//     echo "<h1>Name {$x} is: {$arr2[$x]}</h1>"; 
// }

//Associate Arrays
// $arr1 = array('maths'=>45, 'english'=>78, 'physics'=>67, 'agric'=>53);
$arr2 = [
    'name'=> 'Kelvine',
    'age'=> 34,
    'gender'=>'female',
    'status'=>1
];

// $array3 = [];
// $array3['barca'] = 4;
// $array3['manU'] = 4;
// $array3['lisesta'] = 5;

// //var_dump($array3);

// foreach ($array3 as $key => $value) {
//     echo "<h1>{$key} score is: {$value}</h1>";
// }

//Multidimensional
$arr1 = [
    [
        'name'=> 'John',
        'age'=> 34,
        'gender'=>'female',
        'status'=>1
    ],
    [
        'name'=> 'Frank',
        'age'=> 25,
        'gender'=>'male',
        'status'=>2
    ],
    [
        'name'=> 'Jane',
        'age'=> 23,
        'gender'=>'female',
        'status'=>1
    ],
    [
        'name'=> 'Kelvin',
        'age'=> 28,
        'gender'=>'male',
        'status'=>0
    ]
];

//From $arr1 above, use a foreach the extract the details of students above 25 years

//var_dump($arr1);
// foreach ($arr1 as $value) {
//     echo "<h1>Name: {$value['name']}, Age {$value['age']}</h1>";
// }

$arr2 = array(
    array(3, 4, 5),
    array(5, 8, 0),
    array(9, 1, 7)
);

// for($row=0; $row<count($arr2); $row++){
     
//      for($col=0; $col<count($arr2[$row]); $col++){
//             echo $arr2[$row][$col].' ';
//      }
//      echo '<br />';
// }

$arr3= [
    'a'=>[1,3],
    'b'=>[9,5],
    'c'=>[6,0],
];

// foreach ($arr3 as $key => $value) {
//     echo "{$key}=>";
//     for($col=0; $col<count($value); $col++){
//         echo $value[$col].', ';
//     }
//     echo '<br />';
// }


// foreach($arr1 as $d){

//     if($d["age"] > 25){
//          echo "{$d["name"]} is above 25 years.<br >";
//     };
// }

//Array Functions





