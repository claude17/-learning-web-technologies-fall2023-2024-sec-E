<?php
    session_start();
    $username=$_SESSION['user']['username'];
?>

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
                    Logged in as <a href="viewprofile.php" align="right"><?php echo$username; ?></a> |
                    <a href="logout.php" align="right">Logout</a>
                <p>
                </td>
            </tr>
            <tr>
                <td width="200" colspan="1">
                    <?php include_once('leftmenu.php'); ?>
                </td>
                <td colspan="2" width="600"><h1>welcome <?php echo $username; ?></h1></td>
            </tr>
            <tr>
                <td height="50" align="center" colspan="2">Copyright 2017</td>
            </tr>
        </table>		
    </body>
</html>