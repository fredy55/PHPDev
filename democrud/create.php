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
        <form action="process.php" method="POST">
            <fieldeset>
                <legend>Add User</legend>
                <table>
                    <tr>
                        <th><strong>First Name: </strong></th>
                        <td><input type="text" name="fname" required/></td>
                    </tr>
                    <tr>
                        <th><strong>Last Name: </strong></th>
                        <td><input type="text" name="lname" required/></td>
                    </tr>
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
                        <td><button type="submit">Upload</button></td>
                    </tr>
                </table>
            </fieldeset>
        </form>

    </body>
</html>