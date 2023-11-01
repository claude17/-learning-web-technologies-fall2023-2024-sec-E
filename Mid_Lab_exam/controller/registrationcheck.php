<?php 
    session_start();
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    $confirmpassword = $_REQUEST['confirm_password'];
    $name = $_REQUEST['name'];
    $r_user = $_REQUEST['r_user'];
    $r_admin = $_REQUEST['r_admin'];

    if($id == "" || $password == "" || $confirmpassword == "" || $name == "" ){
        echo "null user id or password or name!";
    }else{
        $user = ['id'=> $id, 'password'=> $password, 'name'=>$name];
        $admin = ['id'=> $id, 'password'=> $password, 'name'=>$name];
        $_SESSION['user'] = $user;
        $_SESSION['admin'] = $admin;
        header('location: ../view/login.php');
    }
?>