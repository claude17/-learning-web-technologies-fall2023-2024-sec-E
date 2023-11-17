<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <table border="1" cellpadding="0" cellspacing="0" width="800" align="center">
            <tr>
                <td>
                <img src="asset/logo.png" height="50px" width="100px">
                <p style="text-align: right;">
                    <a href="home.php" align="right">Home</a> | 
                    <a href="login.php" align="right">Login</a> |
                    <a href="registration.php" align="right">Registration</a>
                <p>
                </td>
            </tr>
            <tr>
                <td height="200" align="center">
                <form action="login.php" method="post">
                    <fieldset style="width: 400px;" align="left">
                        <legend>LOGIN</legend>
                        User Name: <input type="text" name="username" value=""> <br/>
                        Password: <input type="password" name="password" value=""><br/><hr>
                        <input type="checkbox" name="remember" value="">Remember Me <br>
                        <input type="submit" name="submit" value="Submit">
                        <a href="forgetPassword.php">Forgot Password?</a>
                    </fieldset>
                </form>
                </td>
            </tr>
            <tr>
                <td height="50" align="center">Copyright 2017</td>
            </tr>
        </table>			
    </body>
</html>
<?php
    session_start();
    //print_r($_GET);
    if(isset($_POST['username'],$_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($username == "" || $password == ""){
            echo "null value";
        }else if($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){
            $_SESSION['flag'] = 'true';
            header('location: dashboard.php');
        }else{
            echo "invalid username/password!";
        }
    }
    
?>
