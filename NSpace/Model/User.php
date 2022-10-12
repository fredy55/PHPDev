<?php 

namespace NSpace\Model; 

class User{
    public function role(){
        echo "Customer <br>";
    }
}

class Account{
    public function role(){
        echo "Accountant in ".__NAMESPACE__."<br>";
    }
}