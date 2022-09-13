<?php 

//Camel => $arrSortNow (e.g. variable, functions etc.)
//Pascal => ArrSortNow (e.g. class)
// Snake => arr_sort_now 

//ARRAYS FUNCTIONS
// $arr1 = array(1, 2, 0, 7, 5, 8, 4, 3);

// $arrCount = count($arr1);

// //echo $arrCount;

// //Array Sorting
// //sort($arr1); //asc
// rsort($arr1); //desc

// for($i = 0; $i<$arrCount; $i++){
//     echo "{$arr1[$i]}<br>";
// }

// $arr2 = [
//     'Eng'=> 56,
//     'Math'=> 34,
//     'Igbo'=>78,
//     'Agric'=>90
// ];

// //asort($arr2); //asc by values
// //ksort($arr2); // asc by keys
// //arsort($arr2); // desc by values
// //krsort($arr2); // desc by values

// foreach($arr2 as $k => $v){
//     echo "{$k} => {$v}<br>";
// }



$arr2 = [
    'Eng'=> 56,
    'Math'=> 34,
    'Igbo'=>78,
    'Agric'=>90
];

//echo "{$k} => {$v}<br>";

// $arrKey = array_keys($arr2);
// $arrVals = array_values($arr2);
// //array_pop($arr2);
// //array_pop($arr2);
// //array_push($arr2, 'Phy');
// $arr3 = ['Phy'=>60];
// $arr4 = array_merge($arr2, $arr3);

$arr1 = array(1, 2, 0, 7, 5, 8, 4, 3);

function timesTwo($x){
  return (int)$x*2;
}

$arr4 = array_map("timesTwo", $arr1);

var_dump(array_sum($arr1));