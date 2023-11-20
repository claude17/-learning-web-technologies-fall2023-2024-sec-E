<?php

require_once('../model/orderModel.php');
include_once('../controller/sessionCheck.php');
//$username=$_SESSION['username'];
$orders=getOrderhistory1();
//$orders=searchOrderhistory($username);
if(isset($_POST['search']))
{
    $search=$_POST['search'];
    if($search=="")
    {
        echo $message="you must type valid username";
    }
    else{
        $orders = searchOrderhistory($search);
        if(!$orders)
        {
            echo $message = "No data found";
        }
    }
}

?>
<html>
    <head>
        <title>Past Order</title>
    </head>
    <body>
        <form action="admin_orderhistory.php" method="post">
            <fieldset>
            <legend>Past Order</legend>
            username: <input type="text" name="search" value="">
            <button type="submit" name="submit" value="submit">search</button>
            <a href="admin_orderhistory.php">
            <button type="button">show all</button><br></a>
            
            <h1>All orders</h1>
            <table border="1" width=50%>
                <tr>
                    <th>username</th>
                    <th>food name</th>
                    <th>food quantity</th>
                    <th>price</th>
                    <th>payment type</th>
                    <th>amount paid</th>
                    <th>adress</th>
                    <th>date</th>
                </tr>
                <?php for($i=0;$i<count($orders);$i++)
                {?>
                <tr>
                    
                    <td><?=$orders[$i]['username']?></td>
                    <td><?=$orders[$i]['food_name']?></td>
                    <td><?=$orders[$i]['food_quantity']?></td>
                    <td><?=$orders[$i]['total_amount']?></td>
                    <td><?=$orders[$i]['payment_type']?></td>
                    <td><?=$orders[$i]['amount_paid']?></td>
                    <td><?=$orders[$i]['adress']?></td>
                    <td><?=$orders[$i]['date']?></td>

        <?php   }?>
                </tr>
            </table>
            <br><a href="admin_dashboard.php">
            <br><button type="button">Back</button><br>
            </fieldset>
        </form>
        
    </body>
</html>

<?php
   
?>