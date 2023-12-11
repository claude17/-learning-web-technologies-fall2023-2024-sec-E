<?php
    require_once('DB.php');
    function viewProduct(){
        $con = getConnection();
        $sql = "select * from product";
        $result = mysqli_query($con, $sql);
        $products = [];
        
        while($product = mysqli_fetch_assoc($result)){
            array_push($products, $product);
        }
        
        return $products;
    }

?>