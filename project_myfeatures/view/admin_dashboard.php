<?php
   include_once('../controller/sessionCheck.php');
?>
<html>
    <head>
        <title>admin dashboard</title>
    </head>
    <body>
        
        <h2>welcome to admin dashboard</h2>
        <b>username: <?php echo $username= $_SESSION['username'];?></b>
        <ul>
            <li><a href="admin_orderhistory.php">view all orderhistory</a></li>
            <li><a href="admin_promotion.php">update promotion</a></li>
            <li><a href="admin_faq.php">update faq</a><br></li>
            <li><a href="admin_aboutus.php">update about us</a><br></li>
            

        </ul>
        <a href="../controller/logout.php"> logout </a>

    </body>
</html>

