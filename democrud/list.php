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
        <a href="create.php" type="button">Add User</a>
        <hr />
        <?php 
            //Connect to serve and select DB using MySQLi
            $conn = new mysqli("localhost", "root", "Fredy255", "demo_crud");

            //Retreive data from DB
            $fetch = $conn->query("SELECT * FROM `users` ORDER BY `first_name` ASC");
        ?>

        <table width="600px" border="1" cellpadding="3">
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Date Created</th>
                <th colspan="2">Actions</th>
            </tr>

            <?php 
              while($row = $fetch->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['status']==1?'Active':'Inactive'; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            <?php 
             }
            ?>
        </table>
    </body>
</html>