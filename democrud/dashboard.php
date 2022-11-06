<?php 
    session_start();

    if(!isset($_SESSION['email'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Domo User Form</title>
    </head>
    <body>
        <h1>Demo CRUD App Dashboard</h1>
        <hr />
        <a href="login.php?logout=4334">Logout</a>
        <hr />
        <?php
            require_once('MyDb.php');

            if(isset( $_SESSION['email'])){
               echo '<h1>'.$_SESSION['email'].'</h1>';
            }


        ?>
    </body>
</html>