<?php
    session_start();
    $username=$_SESSION['user']['username'];
    $name=$_SESSION['user']['name'];
    $email=$_SESSION['user']['email'];
    $gender=$_SESSION['user']['gender'];
    $day=$_SESSION['user']['day'];
    $month=$_SESSION['user']['month'];
    $year=$_SESSION['user']['year'];
?>
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
                    Logged in as <a href="viewprofile.php" align="right"><?php echo $username; ?></a> |
                    <a href="logout.php" align="right">Logout</a>
                <p>
                </td>
            </tr>
            <tr>
                <td width="250" colspan="1">
                    <?php include_once('leftmenu.php'); ?>
                </td>
                <td colspan="1" width="300" align="center">
                    <fieldset style="width: 400px;" align="left">
                        <legend>PROFILE</legend>
                        Name: <?php echo $name; ?>  <hr>
                        Email: <?php echo $email; ?> <hr>
                        Gender: <?php echo $gender; ?> <hr>
                        Date of Birth: <?php echo $day; ?> / <?php echo $month; ?> / <?php echo $year; ?><hr>
                        <a href="editProfile.php">Edit Profile</a>
                    </fieldset>
                </td>
                <td colspan="1" width="200" align="center" style="border: 1;">
                    <img src="asset/propic.png" height="100px" width="100px"><br>
                    <a href="changeprofilepic.php">Change</a>
                </td>
            </tr>
            <tr>
                <td height="50" align="center" colspan="3">Copyright 2017</td>
            </tr>
        </table>		
    </body>
</html>