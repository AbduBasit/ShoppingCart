<?php session_start();
if(isset($_SESSION['name'])){

$products = array(
                "dryFruits" => array("almond" => "2500","pistachios" => "4000"),
                "cosmatics" => array("lotion" => "500", "soap" => "50"),
                "generalItems" => array("sunGlasses" => "500", "headphone" => "4000")
                );
                /*echo "<pre>";
                print_r($products);*/
                $_SESSION['products']= $products;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style> @import url("css/style.css");</style>
</head>
<body>
    <div class="row">
        <div class="col-12 header">
               
               <p style = "text-align:right";><?php echo $_SESSION["name"]?>
               <span style = "text-align:right";><a href="logout.php">LogOut</a></span>
               </p> 
                

        </div>
    </div>
    <div class="row">
        <div class="col-12 introduction">
            <h1>Welcome to ABARA </h>
        </div>
    </div>
    <div class="row">
        <div class="col-12 pera">
            <p>Here you can find worlds finnest products <br> Because We prefer costomer care</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 products">
            <h2>Our Products</h2>
            
                <ul>
                    <a href="dryFruits.php"><li>Dry Fruits </li></a>
                    <a href="cosmatics.php"><li>Cosmatics</li></a>
                    <a href="generalitems.php"><li>General Items</li></a>

                </ul>
            
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-12 footer">
            <p>all copyright &copy; reserved to <a target="_blank" href="#">HIST</a> </p>
        </div>
    </div>
    <?php
    }else{
        header("location: login.php");
    }
        ?>
</body>
</html>