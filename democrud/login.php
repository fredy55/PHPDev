<?php 
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
        <h1>Welcome to Demo CRUD App</h1>
        <hr />
        <?php
            require_once('MyDb.php');

            if(isset($_POST['email'])){
               //Get login form data
                $email = trim($_POST['email']);
                $pass = md5(trim($_POST['pass']));

                // echo $pass;
                // exit;

                $mydb = new MyDb();

                //Authentication
                $sql = "SELECT `email`, `first_name` 
                        FROM `users`
                        WHERE `email`= '$email'
                        AND `password`='$pass' LIMIT 1";

                $validate = $mydb->loginValidate($sql);

               //Authorization
               if($validate){
                  //set login session
                  $_SESSION['email'] = $email;

                  //redirect to dashboard
                  header("Location: dashboard.php");

               }else{
                 echo 'Wrong email or password!';
               }


            }

            if(isset($_GET['logout'])){
                //Get login form data
                session_unset();
                session_destroy();

                echo 'You are logged out!';
             }


        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <fieldeset>
                <legend>User Login</legend>
                <table>
                    <tr>
                        <th><strong>Email: </strong></th>
                        <td><input type="email" name="email" required/></td>
                    </tr>
                    <tr>
                        <th><strong>Password: </strong></th>
                        <td><input type="password" name="pass" required/></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><button type="submit">Login</button></td>
                    </tr>
                </table>
            </fieldeset>
        </form>

    </body>
</html>