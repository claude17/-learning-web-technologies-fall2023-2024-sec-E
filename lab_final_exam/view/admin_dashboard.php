<?php
   include_once('../controller/sessionCheck.php');
?>
<html>
    <head>
        <title>admin dashboard</title>
    </head>
    <body>
        
        <h2>welcome to admin dashboard</h2>
        <b>username: <?php echo $username= $_SESSION['username'];?></b>
        <ul>
            <li><a href="addemployee.php">Add Employee</a></li>
            <li><a href="updateEmployee.php">Update Employee</a></li>
            <li><a href="deleteEmployee.php">Delete Employee</a><br></li>
            <li><a href="searchEmployee.php">Search Employee</a><br></li>
            

        </ul>
        <a href="../controller/logout.php"> logout </a>

    </body>
</html>