<?php 

require_once("config.php");

class MyDb{
    private $connect;
    
    public function __construct(){

    }

    public function openConnect(){
        $this->connect = new mysqli(HOST, USER, PASSWORD, DATABASE);
    }

    public function fetchData(){
       //Retreive data from DB
       $fetch = $this->connect->query("SELECT * FROM `users` ORDER BY `first_name` ASC");
    }


}

$mydb = new MyDb();
$mydb->openConnect();