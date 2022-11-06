<?php 

require_once("config.php");

class MyDb{
    private $connect;
    
    public function __construct(){
        $this->openConnect();
    }

    public function openConnect(){
        $this->connect = new mysqli(HOST, USER, PASSWORD, DATABASE);
    }

    /**
     * Validate login form data
     * @param string $sql
     * 
     * @return string
     */
    public function loginValidate(string $sql): bool
    {
       //Retreive data from DB
       $validate = $this->connect->query($sql);

       //echo $validate->num_rows;
       
       if($validate->num_rows === 1 ){
           return true;
       }else{
          return false;
       }
    }

    public function closeConnect(){
        $this->connect->close();
    }

}

