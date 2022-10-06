<?php 

//Exceptions

/**
 * throw
 * try
 * catch
 * finally
 */

 class CompMath{

    public function getSum(int $x, int $y):mixed
    {
        try {
            if($x<0)
                throw new Exception('Error Occured: Min value is 0.');
                
            return $x+$y;
        } catch (Exception $linus) {
            //return $e->getMessage();
            //return $e->getCode();
            //return $e->getFile();
            //return $e->getLine();
            return "'{$linus->getMessage()}' on line {$linus->getLine()} in {$linus->getFile()}";

        }finally{
            return "X: {$x} and Y: {$y}";
        }

    }
 }

 $comp = new CompMath();
 echo $comp->getSum(-3, 5);