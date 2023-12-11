<html>
<head>
    <title>Signup</title>
</head>
<body>
    <form method="post" action="../controller/signupCheck.php" enctype="">
        <fieldset>
            <legend><h3>login</h3></legend>
            Name:
            <input type="text" name="name" value="" /> <br><br>
            User Name <br>
            <input type="text" name="username" value="" /> <br><br>
            Email <br>
            <input type="email" name="email" value="" /> <br><br>
            Password <br>
            <input type="password" name="password" value="" /> <br><br>
            <legend> Gender </legend>
                <input type="radio" name="userType" value="Buyer" /> Buyer
                <input type="radio" name="userType" value="Seller" /> Seller
                
                <br><br>
            
            <input type="submit" name="submit" value="Signup" />
            Already have an acount? Click here to <a href="login.php">login</a>
        </fieldset>
    </form>
</body>
</html>