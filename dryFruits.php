<?php session_start();
if(isset($_SESSION['name'])){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dry Fruits</title>
    <style> @import url("css/style.css");</style>
</head>
<body>
    <div class="row">
        <div class="col-12 header">
               <p style = "text-align:right";>
               <span style = "float: left;"><a href="dashboard.php">Home</a></span>
               <?php echo $_SESSION["name"]?>
               <span style = "text-align:right";><a href="logout.php">LogOut</a></span>
               </p> 
        </div>
    </div>
    <div class="row">
        <div class="col-12 introduction">
            <h1>Dry Fruits </h>
        </div>
    </div>
    
    <div class="row">
        <div class="col-3 productsShow">
            <h2>Our Products</h2>
            <div class="col-12 fruits ">
                <ul>
                    <a href="cosmatics.php"><li>Cosmatics </li></a>
                    <a href="generalitems.php"><li>General Items</li></a>

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8 productsShow">
            
            <div class="col-12  ">
                <ul class = "display">
                    <li><img width = 100 height = 100 src="images/dryFruit.jpg" alt=""></li>
                    <li>Almond</li>
                    <li>RS <?php echo $_SESSION['products']['dryFruits']['almond'];?></li>
                    <form action="#" method = "POST">
                        <li><input type="number" placeholder = "Quantity" name = "almondQuantity"></li>
                        <li><input type="submit" name = "addToCartdry1" value = "Add to Cart"></li>

                    </form>
                    

                </ul>
                <ul class = "display">
                    <li><img width = 100 height = 100 src="images/pistachios.jpg" alt=""></li>
                    <li>Pistachios</li>
                    <li>RS <?php echo $_SESSION['products']['dryFruits']['pistachios'];?></li>
                    <form action="#" method = "POST">
                        <li><input type="number" placeholder = "Quantity" name = "pistachiosQuantity"></li>
                        <li><input type="submit" name = "addToCartdry2" value = "Add to Cart"></li>

                    </form>
                    

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 button">
            <a class = "button" href="result.php"><input type="button" value = "Check Out"></a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12 footer">
            <p>all copyright &copy; reserved to <a target="_blank" href="#">HIST</a> </p>
        </div>
    </div>
    <?php

    if(isset($_POST['addToCartdry1'])){
        if(isset($_SESSION['almondQuantity'])){
        $_SESSION['almondQuantity'] += $_POST['almondQuantity'];
        //echo $_SESSION['almondQuantity'];
        }else{

            $_SESSION['almondQuantity'] = $_POST['almondQuantity'];
        }
    }
    if(isset($_POST['addToCartdry2'])){
        if(isset($_SESSION['almondQuantity'])){
        $_SESSION['pistachiosQuantity'] += $_POST['pistachiosQuantity'];
        //echo $_SESSION['pistachiosQuantity'];
        }else{

            $_SESSION['pistachiosQuantity'] = $_POST['pistachiosQuantity'];
        }
    }

    }else{
        header("location: login.php");
    }
        ?>
</body>
</html>