<html>
    <head>
        <title>Home page</title>
    </head>
    <body>
        <table border="1" cellpadding="0" cellspacing="0" width="800" align="center">
            <tr>
                <td colspan="2">
                <img src="asset/logo.png" height="50px" width="100px">
                <p style="text-align: right;">
                    <a href="home.php" align="right">Home</a> | 
                    <a href="login.php" align="right">Login</a> |
                    <a href="registration.php" align="right">Registration</a>
                <p>
                </td>
            </tr>
            <tr>
                <td width="200">
                    <?php include_once('leftmenu.php'); ?>
                </td>
                <td colspan="2" width="600" align="center">
                    <form method="post">
                        <fieldset style="width: 400px;" align="left">

                            <legend>FORGOT PASSWORD</legend>
                            Email: <input type="email" name="email"value= ""><br/><hr>
                            <input type="submit" name="submit" value="Submit">
                        
                        </fieldset>
                    </form>
                </td>
            </tr>
            <tr>
                <td height="50" align="center" colspan="2">Copyright 2017</td>
            </tr>
        </table>		
    </body>
</html>