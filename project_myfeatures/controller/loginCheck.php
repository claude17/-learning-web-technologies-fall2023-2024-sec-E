<?php
    require_once('../model/userModel.php');

    session_start();
    $userName = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($userName == "" || $password == "" ){
    
        echo "null username or password!";
    
    }else{
        $status = login($userName, $password);
        
        if ($status){
            $_SESSION['flag'] = 'true';
            header('location: ../view/user_dashboard.php');
        }else{
            echo "invalid user!";
        }
    }
?>