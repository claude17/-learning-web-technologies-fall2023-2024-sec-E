<?php
    require_once('../model/userModel.php');
    //$addedPromotion = $_POST['addedPromotion'];
    if(isset($_POST['addedPromotion']))
    {
        $addedPromotion = $_POST['addedPromotion'];
        addPromotion($addedPromotion);
        echo "Promotion added successfully";
    }
    
    

?>

<html>
    <head>
        <title>Add promotion</title>
    </head>
    <body>
        <form method="post" action="addpromotion.php">
            <h3>Input or type the promotion: </h3>
            <textarea name=addedPromotion></textarea><br>
            <button type="submit" name="submit" value="submit">Add</button><br><br>
            <a href="promotion.php"> View Promotion </a>
        </form>
        
    </body>

</html>
    