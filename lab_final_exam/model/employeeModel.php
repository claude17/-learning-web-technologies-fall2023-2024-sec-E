<?php
    require_once('db.php');
    function addEmployee($ename,$contact,$username,$password)
    {
        $con = getConnection();
        $sql = "INSERT INTO employee (ename, contact, username, password) VALUES ('$ename','$contact','$username','$password')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }
?>