<?php 

/**
 * Constants within classes
 * Annotions
 * Return types
 * Inheritance - 
 *   a) Single
 *   b) multilevel
 *   c) multiple
 *    
 * Access Modifiers
 */


//  define('LARGE_SIZE', 23);
//  echo LARGE_SIZE;

 class Shapes{ //Parent, Base, Super
    /**
     * The max shape size
     * @var int MAX_SIZE
     */
    const MAX_SIZE = 56;

    public int $data;

     public function __construct(int $data){
        $this->data = $data;
        print 'Initializing...<br>';
     }

     /**
      * The method computes the sum of 2 integers
      * @param int $num1
      * @param int $num2
      *
      * @return float
      */
     public function getSum(int $num1, int $num2):mixed
     {
         return $num1 + $num2;
     }
     

     public function sides(){
        echo self::MAX_SIZE;
     }
 }

 //PHP 7.X  => 8.x

 class Triangle extends Shapes{ //Child, derived, sub
    public float $num;
    
    public function __construct(int $data, float $num){
        Parent::__construct($data);
        $this->num = $num;
        print 'Loading child class...<br>';
    }

    public function getProduct(){
        echo $this->data * $this->num;
    }
 }

 class RightAngle extends Triangle{
    public function __construct(int $data, float $num){
        Parent::__construct($data, $num);
    }
 }

 //$myshape = new Shapes();
 //$myshape = new Triangle(3, 4.7);
 $trishape = new RightAngle(3, 4.7);
 //$myshape->sides();
 $trishape->getProduct();
 //echo $myshape->getSum(2,5);

 //echo Triangle::MAX_SIZE;