<?php
    if(isset($_POST['ename'] , $_POST['contact'],$_POST['username'],$_POST['password']))
    {
        
        $ename=$_POST['ename'];
        $contact = $_POST['contact'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($ename == "" || $contact == "" || $username=="" || $password=="")
        {
            echo "null value inserted";
    
        }
        else{
            addEmployee($ename,$contact,$username,$password);
            echo "employee added successfully";
            
        }
    }
?>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>
    <form method="post" action="addEmployee.php" enctype="">
        <fieldset>
            <legend><h3>add employee</h3></legend>
            Employee Name <br>
            <input type="text" name="ename" value="" /> <br><br>
            Contact no <br>
            <input type="number" name="contact" value="" /> <br><br>
            User Name <br>
            <input type="text" name="username" value="" /> <br><br>
            Password <br>
            <input type="password" name="password" value="" /> <br><br>
            
            
            <input type="submit" name="submit" value="add employee" />
            <input type="reset" name="reset" value="Reset" />
            <a href="admin_dashboard.php">Go Back</a>
        </fieldset>
    </form>
</body>
</html>