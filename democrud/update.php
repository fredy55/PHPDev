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
            if(isset($_GET['id'])){
                //Connect to serve and select DB using MySQLi
                $conn = new mysqli("localhost", "root", "Fredy255", "demo_crud");

                $id = $_GET['id'];

                //Retreive data from DB
                $fetch = $conn->query("SELECT `id`, `first_name`, `last_name`, `email` FROM `users` WHERE `id`= $id LIMIT 1");
                $row = $fetch->fetch_array();
                //var_dump($row);
            }else{
                header("Location: list.php");
            }
        ?>
        <form action="process.php" method="POST">
            <fieldeset>
                <legend>Update User</legend>
                <table>
                    <tr>
                        <th><strong>First Name: </strong></th>
                        <td><input type="text" name="fname" value="<?php echo $row['first_name']; ?>" required/></td>
                        <td><input type="hidden" name="id" value="<?php echo $row['id']; ?>" required/></td>
                    </tr>
                    <tr>
                        <th><strong>Last Name: </strong></th>
                        <td><input type="text" name="lname" value="<?php echo $row['last_name']; ?>" required/></td>
                    </tr>
                    <tr>
                        <th><strong>Email: </strong></th>
                        <td><input type="email" name="updemail" value="<?php echo $row['email']; ?>" required/></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><button type="submit">Upload</button></td>
                    </tr>
                </table>
            </fieldeset>
        </form>

    </body>
</html>