<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div id= "form"> 
            <form action="regback.php" method="post" enctype="multipart/form-data">
                <input type="hidden"name="action" value="registration">
                <table>
                    <h1>registration</h1>
                    <tr>
                        <td>first name: </td>
                        <td><input type="text" name="FirstName"></td>
                    </tr>
                    <tr>
                        <td>last name: </td>
                        <td><input type="text" name="LastName"></td>
                    </tr>
                    <tr>
                        <td>username: </td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="Email"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="submit"></td>
                    </tr>
                </table>
            </form>
        </div>  
</body>
</html>