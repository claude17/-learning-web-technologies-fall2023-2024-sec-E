<?php
    //session_start();
    //print_r($_SESSION);

?>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
        <form method="post" action="../controller/loginCheck.php" enctype="">
            <fieldset>
                <legend>Signin</legend>
                Username: <input type="text" name="username" value="" /> <br>
                Password: <input type="password" name="password" value="" /> <br>
                     <input type="submit" name="submit" value="Submit" />
                     <a href="registration.php">Signup</a>
            </fieldset>
                
        </form>
</body>
</html>