<?php
    //session_start();
    require_once('../model/userModel.php');
    
    //require_once('mydb.php');
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $userType="customer";

   
    if($firstName == "" || $lastName == "" || $userName == "" || $email == "" || $password == "" || $gender == "" || $phone == ""){
        echo "null username or password or email!";
    }else{
        $user = ['firstName'=> $firstName, 'lastName'=> $lastName, 'userName'=> $userName, 'email'=>$email, 'password'=> $password, 'gender'=> $gender, 'phone'=> $phone, 'userType'=> $userType];
        $status = signup($user);
        //$_SESSION['user'] = $user;
        //header('location: ../view/login.html');
        if ($status){
            echo "you have signed up successfully";
            //$_SESSION['flag'] = 'true';
            
        }
    }
?>

<html>
    <body>
        <br>click here to login <a href="../view/login.php"> login </a>
    </body>
</html>

  