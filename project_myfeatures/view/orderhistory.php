<?php

require_once('mydb.php');
$con = getConnection();
$query = "select * from orderhistory";
$result = mysqli_query($con,$query);

?>
<html>
    <head>
        <title>Past Order</title>
    </head>
    <body>
        <form action="">
            <fieldset>
            <legend>Past Order</legend>
            <h1>Your past orders</h1>
            <table border="1" width=100%>
                <tr>
                    <th>id</th>
                    <th>food name</th>
                    <th>food quantity</th>
                    <th>price</th>
                    <th>amount paid</th>
                    <th>date</th>
                    <th>adress</th>
                </tr>
                <tr>
                    <?php
                        while($row=mysqli_fetch_assoc($result))
                        {
                    ?>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['food name']; ?></td>
                            <td><?php echo $row['food quantity']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['amount paid']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['adress']; ?></td>
                </tr>
                <?php
                        }
                    ?>
                </tr>
            
            </table>
            </fieldset>
        </form>
        
    </body>
</html>