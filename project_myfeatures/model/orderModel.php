<?php
require_once('mydb.php');
function getReview($username){
        $con = getConnection();
        $sql = "select * from orderhistory history where username='$username'";
        $result = mysqli_query($con, $sql);
        $orders = [];
        
        while($orderhistory = mysqli_fetch_assoc($result)){
            array_push($orders, $orderhistory);
        }
        
        return $orders;
    }
?>