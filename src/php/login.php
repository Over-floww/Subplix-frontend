<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subplix</title>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <td>User Type</td>
                <td><select>
                    <option value="-1">Select user type</option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select></td>  
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pwd" placeholder="password"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>