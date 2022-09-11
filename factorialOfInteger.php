<?php
    function numFactorial(int $num) //this function will compute the factorial of any integer
    {
        $d = 1; $e = $num;
        for($i=1; $i<$num; $num--)
        {
            $d *= $num;
        }
        return "{$e} factorial is {$d}";
    }

    echo numFactorial(10) //this displays the factorial of 10
?>