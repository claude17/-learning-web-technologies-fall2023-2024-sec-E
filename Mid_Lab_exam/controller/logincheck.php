<?php
    require_once('../model/userModel.php');

    session_start();
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];

    if($id == "" || $password == "" ){
    
        echo "null user id or password!";
    
    }else{
        $status = login($id, $password);
        
        if ($status){
            $_SESSION['flag'] = 'true';
            header('location: ../view/user_home.html');
        }else{
            echo "invalid user!";
        }
    }
?>