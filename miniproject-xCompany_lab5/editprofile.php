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
                <td width="200" colspan="1">
                    <?php include_once('leftmenu.php'); ?>
                </td>
                <td colspan="1" width="300" align="center">
                    <fieldset style="width: 400px;" align="left">
                        <legend>EDIT PROFILE</legend>
                        Name:   <input type="text" name="name" value="<?php echo $name; ?>"><hr>
                        Email:  <input type="email" name="email" value="<?php echo $email; ?>"><hr>
                        Gender: <input type="radio" name="gender" value="Male" <?php echo ($gender === 'Male') ? 'checked' : ''; ?> /> Male
                                <input type="radio" name="gender" value="Female" <?php echo ($gender === 'Female') ? 'checked' : ''; ?> /> Female
                                <input type="radio" name="gender" value="Other" <?php echo ($gender === 'Other') ? 'checked' : ''; ?> /> Other<hr>
                        Date of Birth: <input type="text" name="dob" value="<?php echo $day; ?>/<?php echo $month; ?>/<?php echo $year; ?>"><hr>
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
<?php
    if (isset($_POST['name'],$_POST['email'],$_POST['gender'],$_POST['dob'])) 
    {
        $Uname=$_POST['name'];
        $Uemail=$_POST['email'];
        $Ugender=$_POST['gender'];
        $Udob=$_POST['dob'];

        $dob = explode('/', $_POST['dob']);

        $Uday = $dob[0];
        $Umonth = $dob[1];
        $Uyear = $dob[2];

        if($Uname=="" || $Uemail=="" || $Ugender=="" || $Udob=="")
        {
            "empty value detected. check again";
        }
        else{
            $name=$Uname;
            $email=$Uemail;
            $gender=$Ugender;
            $day=$Uday;
            $month=$Umonth;
            $year=$Uyear;
            header('Location: editprofile.php');
            
        }
    }
?>
