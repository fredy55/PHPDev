<?php 

function solution(array $A){
    $maxval = max($A);
    
    //Is max value <=0
    if($maxval<=0) return 1;
    
    //If answer is not in $A O(n)
    for ($i=1; $i < $maxval+1; $i++) { 
        if(!in_array($i, $A)){
            return $i;
        }
    }

    return $maxval+1;
}

$A = [1,5,6,4,1,2,3]; 
//$A = [-1,-3];
//$A = [1,2,3];
echo solution($A);

/**
 * Time Complexity
 * Space Complexity
 */