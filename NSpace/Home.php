<?php 

declare(strict_types = 1);

namespace NSpace;
//Namespace => Virtual folder structure
// Namesapce Aliases

//Global namespace

//use NSpace\Model\User as Customer;
//use NSpace\Model\Account;

use NSpace\Model\{Account, User as Customer};
use NSpace\View\User as UI;

require_once 'Model/User.php';
require_once 'View/Index.php';

class User{
    public function role(){
        echo "Admin <br>";
    }
}

$ui = new UI();
$ui->page();

$admin = new User();
$admin->role();

$customer = new Customer();
$customer->role();

$account = new Account();
$account->role();

echo "<br><hr><br>";

/**
 * magic constants
 * 
 */

 //__LINE__
 echo "The current line is ".__LINE__."<br>";

  //__FILE__
  echo "The current file location is ".__FILE__."<br>";

  //__FILE__
  echo "The current directory/folder location is ".__DIR__."<br>";
  
   //ClassName::class
   echo "The current class is ".User::class."<br>";
   echo "The current class is ".Customer::class."<br>";
  
  
   /**
   * __FUNCTION__
   * __CLASS__
   * __TRAIT__
   * 
   */