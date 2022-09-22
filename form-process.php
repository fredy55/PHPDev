<?php 

//Create Login session
session_start();

//POST

if(isset($_POST['user']) && isset($_POST['pass'])){
    //echo '<h3>Valid form submission!</h3>';
    echo "Username: {$_POST['user']}  <br> Password: {$_POST['pass']}";
    
    $_SESSION['user'] = $_POST['user'];
    echo "<h3>{$_REQUEST['user']}! You are now logged-in.";

}else{
    echo '<h3>Invalid form submission!</h3>';
}

// if(isset($_GET['user']) && isset($_GET['pass'])){
//     //echo '<h3>Valid form submission!</h3>';
//     echo "Username: {$_GET['user']}  <br> Password: {$_GET['pass']}";
// }else{
//     echo '<h3>Invalid form submission!</h3>';
// }

// if(isset($_REQUEST['user']) && isset($_REQUEST['pass'])){
//     //echo '<h3>Valid form submission!</h3>';
//     echo "Username: {$_REQUEST['user']}  <br> Password: {$_REQUEST['pass']}";
    
// }else{
//     echo '<h3>Invalid form submission!</h3>';
// }