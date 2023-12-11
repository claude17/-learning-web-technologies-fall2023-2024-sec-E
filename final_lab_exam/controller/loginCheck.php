<?php
    require_once('../model/userModel.php');
    //include_once('../controller/sessionCheck.php');

    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == "" ){
    
        echo "null username or password!";
    
    }else{
        $status = login($username, $password);
        if($status)
        {
            if ($status['userType'] == "admin"){
                $_SESSION['flag'] = 'true';
                $_SESSION['username'] = $username;
                header('location: ../view/admin_dashboard.php');
            }
            elseif ($status['userType'] == "seller") {
                $_SESSION['flag'] = 'true';
                $_SESSION['username'] = $username;
                header('location: ../view/seller_dashboard.php');
            }
            elseif ($status['userType'] == "buyer") {
                $_SESSION['flag'] = 'true';
                $_SESSION['username'] = $username;
                header('location: ../view/buyer_dashboard.php');
            }
        }
        else{
                echo "invalid user!";
            }
        
    }
?>
?>
