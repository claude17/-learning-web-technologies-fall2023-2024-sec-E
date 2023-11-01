<?php

    require_once('db.php');
    function login($id, $password){
        $con = getConnection();
        $sql = "select * from users where username='{$id}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }
?>