<?php 

function fizzBuzz(int $n):array

{

    //Array to store/return results

    $answer = array();

    //for loop to calculate multiples

    for($count = 1; $count <= $n; $count++)

    {

        //if both 3 and 5 are multiples of $count

        if((($count%3) == 0) && (($count%5) == 0))

            $answer[$count] = "FizzBuzz";

        //if only 3 is a multiple of $count

        elseif(($count%3) == 0)

            $answer[$count] = "Fizz";

        //if only 5 is a  multiple  of $count

        elseif(($count%5) == 0)

            $answer[$count] = "Buzz";

        //if 3 and 5 are not multiples of $count

        else

            $answer[$count] = "$count";

    }

    return $answer;

}




//test a case


echo var_dump(fizzBuzz(105));