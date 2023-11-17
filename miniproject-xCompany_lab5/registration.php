<html>
    <head>
        <title>Registration</title>
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
                <form method="post" action="registration.php" enctype="">
                    <fieldset style="width: 400px;" align="left">
                        <legend>REGISTRATION</legend>
                        Name: <input type="text" name="name" value="" /> <hr>
                        Email: <input type="email" name="email" value="" /> <hr>
                        User Name: <input type="text" name="username" value="" /> <hr>
                        Password: <input type="password" name="password" value="" /> <hr>
                        Confirm Password: <input type="password" name="confirmpassword" value="" /> <hr>
                        <fieldset>
                            <legend> Gender </legend>
                            <input type="radio" name="gender" value="Male" /> Male
                            <input type="radio" name="gender" value="Female" /> Female
                            <input type="radio" name="gender" value="Other" /> Other
                        </fieldset> <hr>
                        <fieldset>
                            <legend> <b> Date of Birth </b> </legend>
                            <input type="number" name="day" value="" style="width: 50px;"/> /
                            <input type="number" name="month" value="" style="width: 50px;"/> /
                            <input type="number" name="year" value="" style="width: 75px;"/> (dd/mm/yyyy)
                        </fieldset> <hr>
                            <input type="submit" name="submit" value="Submit" />
                            <input type="reset" name="reset" value="Reset" />
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
    // if(!isset($_POST['gender']))
    // {
    //     $gender="";
        
    // }
    // else{
    //     $gender=$_POST['gender'];
    // }
    if(isset($_POST['name'],$_POST['email'],$_POST['username'],$_POST['password'],$_POST['confirmpassword'],$_POST['day'],$_POST['month'],$_POST['year']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        //$gender=$_POST['gender'];
        if(!isset($_POST['gender']))
        {
            $gender="";
            
        }
        else{
            $gender=$_POST['gender'];
        }
        
        $day = $_POST['day'];
        $month= $_POST['month'];
        $year = $_POST['year'];

        
        if($name == "" || $email == "" || $username == "" || $password=="" || $confirmpassword=="" || $gender=="" || $day=="" || $month=="" || $year==""){
            echo "null value";
        }
        elseif(!($password==$confirmpassword))
        {
            echo "confirm password did not match";
        }
        else
        {
            $user = ['name'=> $name, 'email'=>$email,'username'=>$username, 'password'=>$password, 'confirmpassword'=>$confirmpassword,'gender'=>$gender,'day'=>$day,'month'=>$month,'year'=>$year];
            $_SESSION['user'] = $user;
            header('location: login.php');
        }
    }
    
?>