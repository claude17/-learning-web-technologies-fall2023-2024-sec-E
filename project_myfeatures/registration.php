<?php
    //session_start();
    require_once('userModel.php');
    
    //require_once('mydb.php');
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    if(signup($firstName, $lastName, $userName, $email, $password, $gender, $phone))
    {
        echo "you have signed up successfully";
    }
    

    /*$con = getConnection();
    $sql="INSERT INTO registration (firstName, lastName, userName, email, password, gender, phone) VALUES (?, ?, ?, ?, ?, ?, ?)";
    //$sql = "INSERT into registration(firstName,lastName,userName,email,password,gender,phone) VALUES('{$firstName}','{$lastName}','{$userName}','{$email}','{$password}','{$gender}','{$phone}'";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "sssssss", $firstName, $lastName, $userName, $email, $password, $gender, $phone);
    $success=mysqli_stmt_execute($stmt);
    if($success)
    {
        echo "User registered successfully!";
    } else {
        echo "Error: ";
    }*/
    

?>