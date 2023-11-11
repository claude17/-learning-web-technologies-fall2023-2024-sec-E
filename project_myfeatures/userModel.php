<?php

    require_once('mydb.php');
    /*function login($, $){
        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }*/

    /*function signup($firstName,$lastName,$userName,$email,$password,$gender,$phone)
    {
        $con = getConnection();
        $sql = "INSERT into registration(firstName,lastName,userName,email,password,gender,phone) VALUES('{$firstName}','{$lastName}','{$userName}','{$email}','{$password}','{$gender}','{$phone}'";
        $result = mysqli_query($con, $sql);
        $success=$result;
        if($success)
        {
            echo "User registered successfully!";
        } else {
            echo "Error: ";
        }
    }*/

    function getPromotion(){
        $con = getConnection();
        $sql = "select * from promotion";
        $result = mysqli_query($con, $sql);
        $promotions = [];
        
        while($promotion = mysqli_fetch_assoc($result)){
            array_push($promotions, $promotion);
        }
        
        return $promotions;
    }
