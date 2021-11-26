<html>
    <head>       
    </head>
<body>
    <form action="signupdata.php" method="POST">
        <table cellspacing=3px cellpadding=3px>
            <tr>
                <td><label>First Name:</label></td>
                <td><input type="text" name="firstname" size="45" required></td>
            </tr>
            <tr>
                <td><label>Last Name: </label></td>
                <td><input type="text" name="lastname" size="45" required></td>
            </tr>
            <tr>
                <td><label>Email:</label></td>
                <td><input type="email" name="email" size="45"required></td>
            </tr>
            <tr>
                <td><label>Profile Picture:</label></td>
                <td><input type="file" name="profilepicture" size="45"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password" size="45"required></td>
            </tr>
            <tr>
                <td><input type="submit"  Value="register" size="45"/></td>
            </tr>
        </table>
    </form>
</body>
</html>