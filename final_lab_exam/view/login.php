<html>
<head>
    <title>login</title>
</head>
<body>
    <form method="post" action="../controller/loginCheck.php" enctype="">
        <fieldset>
            <legend><h3>login</h3></legend>
            User Name <br>
            <input type="text" name="username" value="" /> <br><br>
            Password <br>
            <input type="password" name="password" value="" /> <br><br>
            
            
            <input type="submit" name="submit" value="Login" /><br><br>
            Dont have an acount? Click here to <a href="signup.php">Signup</a>
        </fieldset>
    </form>
</body>
</html>