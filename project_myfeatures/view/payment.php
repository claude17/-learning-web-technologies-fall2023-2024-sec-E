<?php
    include_once('../controller/sessionCheck.php');
    //$username=$_SESSION['username'];
    $foodname=$_POST['foodname'];
    $_SESSION['foodname']=$foodname;
    $quantity = $_POST['quantity'];
    $_SESSION['quantity']=$quantity;
    $totalamount= $quantity * 5;
    $_SESSION['totalamount']=$totalamount;
    
    
?>
<html>
    <head>
        <title>payment</title>
    </head>
    <body>
        <form action="../controller/paymentCheck.php" method="post" >
            <fieldset>
                <h2>Payment</h2>
                <b>Food: <?php echo $foodname;?>&nbsp;&nbsp; <?php echo $quantity; ?> x 5$ <br>
                <br>Total amount: <?php echo $totalamount; ?>$ <br>
                <br>Payment Type: 
                <select name="paymenttype">
                    <option value="cash">Cash</option>
                    <option value="card">Card</option>
                </select><br><br>

                Adress: <input type="text" name="adress" value="">
                <br><br>Pay Amount: <input type="number" name="amountpaid" value="" ><br></b><br>
                
                <input type="submit" name="submit" value="Pay">
            </fieldset> 
        </form>
    </body>
</html>

