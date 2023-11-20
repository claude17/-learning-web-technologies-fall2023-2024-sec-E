<?php
    include_once('../controller/sessionCheck.php');
?>
<html>
    <head>
        <title>order page</title>
    </head>
    <body>
        <form action="payment.php" method="post">
            <fieldset>
                <h2>choose item to order</h2>
    
                <input type="radio" name="foodname" value="Pizza" /> Pizza
                &nbsp&nbsp&nbspPrice: 5$
                <br><br>Pizza Quantity: <input type="number" name="quantity" value=""><br>
                
                <br><input type="submit" name="submit" value="Proceed to payment"><br><br>
                <a href="user_dashboard.php">Go back</a>
            </fieldset> 
        </form>
    </body>
</html>
