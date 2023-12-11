<?php
    require_once('DB.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        //$count = mysqli_num_rows($result);
        
        
        if($user){
            return $user;
        }
        else{
            return false;
        }
    }

    function signup($user)
    {
        $name = $user['name'];
        $username = $user['username'];
        $email = $user['email'];
        $password = $user['password'];
        $userType = $user['userType'];

        $con = getConnection();
        $sql = "INSERT INTO registration (name, username, email, password, userType)
        VALUES ('$name', '$username', '$email', '$password', '$userType')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function viewProfile($username){
        $con = getConnection();
        $sql = "select * from user where username='$username'";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        
        return $users;
    }

?>