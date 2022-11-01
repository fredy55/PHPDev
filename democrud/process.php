<?php

//Create user
if(isset($_POST['email'])){
    //echo 'Processing....';

    //Get the form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = md5($_POST['pass']);
    $status = 1;
    $date = date("Y-m-d h:i:s");

    //Validate form data

    //Connect to serve and select DB using MySQLi
    $conn = new mysqli("localhost", "root", "Fredy255", "demo_crud");

    // if($conn){
    //     echo 'connected successfully!';
    // }

    
    if(!empty($email) && !empty($fname)){
        //Save form data
        $sql = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `status`, `date`) VALUES (NULL, '$fname', '$lname', '$email', '$password', '$status', '$date')";
        $save = $conn->query($sql);
        
        //Give response
        if($save){
            echo 'User created successfully!';
            header("Location: list.php");
        }else{
            echo 'User NOT created!';
        }
    }

}