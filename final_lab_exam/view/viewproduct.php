<?php
    require_once('../model/productModel.php');
    include_once('../controller/sessionCheck.php');
    $products=viewProduct();
?>
<html>
    <head>
        <title>Products</title>
    </head>
    <body>
        <form action="">
            <fieldset>
            <legend>Products</legend>
            <h1>Product List</h1>
            <table border="1" width=50%>
                <tr>
                    <th>name</th>
                    <th>price</th>
                    <th>model</th>
                    <th>warranty</th>
                    <th>brand</th>
                </tr>
                <?php for($i=0;$i<count($products);$i++)
                {?>
                <tr>
                    
                    <td><?=$products[$i]['pname']?></td>
                    <td><?=$products[$i]['pprice']?></td>
                    <td><?=$products[$i]['pmodel']?></td>
                    <td><?=$products[$i]['pwarranty']?></td>
                    <td><?=$products[$i]['pbrand']?></td>
                    

        <?php   }?>
                </tr>
            </table>
            
            </fieldset>
        </form>
        
    </body>
</html>