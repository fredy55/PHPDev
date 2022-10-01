<?php 

//import the Payment Traits
require_once('Payment.php');

/**
 *  final
 *  Abstration (abstract classes & interface)
 *  Traits
 */

//  class School{

//     public final function admit():string 
//     {
//         return "The admission for this year has closed!";
//     }
//  }

//  class Admin extends School{
//     public function admit():string 
//     {
//         return "The admission for this year is ongoing!";
//     }
//  }

 abstract class School{
     public string $rules;

     public function __construct(string $rules){
         $this->rules = $rules;
     }

     abstract protected function primary():string;

     public function preNursery():string
     {
        return "We reshape children to adopt {$this->rules}";
     }
 }



 class Admin extends School{

    use TuitionFee, HostelFee;

    public function primary():string
    {
        return "Our school promotes {$this->rules}";
    }
 }

 //$myadmit = new School();
$myadmit = new Admin('honesty');
echo $myadmit->totalPay().'<br>';
echo $myadmit->securityLevy().'<br>';
//  echo $myadmit->rules.'<br>';
//  echo $myadmit->primary().'<br>';
//  echo $myadmit->preNursery().'<br>';
 /**
  * private => protected => public
  */

interface Assessment{
    public function Assignment(int $score);

    public function Exams();
}

class Result extends School implements Assessment{
     const MAX_SCORE_ASSGN = 40;
     const MAX_SCORE_EXAM = 65;

     public function primary():string
     {
         return "Our school promotes {$this->rules}";
     }

    public function Assignment(int $score, int $bonus=5):int
    {
        return (($score+$bonus)/self::MAX_SCORE_ASSGN) * 100;
    }

    public function Exams():int
    {
        return (46/self::MAX_SCORE_EXAM) * 100;
    }
}

class Awards{
    const MAX_SCORE_ASSGN = 55;
    const MAX_SCORE_EXAM = 70;

    public function Assignment(int $score):int
    {
        return ($score/self::MAX_SCORE_ASSGN) * 100;
    }

    public function Exams():int
    {
        return (40/self::MAX_SCORE_EXAM) * 100;
    }
}

// $myresult = new Result('honesty');
// echo $myresult->Assignment(25, 7).'<br>';
// echo $myresult->primary().'<br>';