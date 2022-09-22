<?php 

    //Create Login session
    session_start();
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
        <h1>Welcome to Superglobals</h1>
        <hr />
        <h5>
            <?php 
                session_unset();
                session_destroy();

                if(isset($_SESSION['user'])){
                    echo $_SESSION['user'];
                }
                
            ?>
        </h5>
        <form action="form-process.php" method="post">
            <fieldeset>
                <legend>User Test Form</legend>
                <p>
                    <strong>Username: </strong>
                    <input type="text" name="user" placeholder="Enter username" required/>
                </p>
                <p>
                    <strong>Password: </strong>
                    <input type="password" name="pass" placeholder="xxxxxxxxxxxxxx" maxlength="32" required/>
                </p>

                <p>
                    <button type="submit">Submit</button>
                </p>
            </fieldeset>
        </form>

    </body>
</html>