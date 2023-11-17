<html>
    <head>
        <title>Home page</title>
    </head>
    <body>
        <table border="1" cellpadding="0" cellspacing="0" width="800" align="center">
            <tr>
                <td colspan="3">
                <img src="asset/logo.png" height="50px" width="100px">
                <p style="text-align: right;">
                    <a href="home.php" align="right">Home</a> | 
                    <a href="login.php" align="right">Login</a> |
                    <a href="registration.php" align="right">Registration</a>
                <p>
                </td>
            </tr>
            <tr>
                <td width="200" colspan="1">
                    <?php include_once('leftmenu.php'); ?>
                </td>
                <td colspan="1" width="300" align="center">
                    <fieldset style="width: 400px;" align="left">
                        <legend>PROFILE PROFILE</legend>
                        <img src="asset/propic.png" height="100px" width="100px"><br>
                        <input type="file" name="" value=""><hr>
                        <input type="submit" name="submit" value="submit">
                        
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td height="50" align="center" colspan="3">Copyright 2017</td>
            </tr>
        </table>		
    </body>
</html>