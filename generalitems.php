<?php session_start();
if(isset($_SESSION['name'])){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Items</title>
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
            <h1>General Items</h>
        </div>
    </div>
    
    <div class="row">
        <div class="col-3 productsShow">
            <h2>Our Products</h2>
            <div class="col-12 fruits ">
                <ul>
                    <a href="dryFruits.php"><li>Dry Fruits </li></a>
                    <a href="cosmatics.php"><li>Cosmatics</li></a>

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8 productsShow">
            
            <div class="col-12  ">
                <ul class = "display">
                    <li><img width = 100 height = 100 src="images/sunglass.jpg" alt=""></li>
                    <li>Sun Glasses</li>
                    <li>RS <?php echo $_SESSION['products']['generalItems']['sunGlasses'];?></li>
                    <form action="#" method = "POST">
                        <li><input type="number" placeholder = "Quantity" name = "sunGlassesQuantity"></li>
                        <li><input type="submit" name = "addToCartGA1" value = "Add to Cart"></li>

                    </form>
                    

                </ul>
                <ul class = "display">
                    <li><img width = 100 height = 100 src="images/headphones.jpg" alt=""></li>
                    <li>Headphones</li>
                    <li>RS <?php echo $_SESSION['products']['generalItems']['headphone'];?></li>
                    <form action="#" method = "POST">
                        <li><input type="number" placeholder = "Quantity" name = "headphoneQuantity"></li>
                        <li><input type="submit" name = "addToCartGA2" value = "Add to Cart"></li>

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

    if(isset($_POST['addToCartGA1'])){
        if(isset($_SESSION['sunGlassesQuantity'])){
        $_SESSION['sunGlassesQuantity'] += $_POST['sunGlassesQuantity'];
        //echo $_SESSION['almondQuantity'];
        }else{

            $_SESSION['sunGlassesQuantity'] = $_POST['sunGlassesQuantity'];
        }
    }
    if(isset($_POST['addToCartGA2'])){
        if(isset($_SESSION['headphoneQuantity'])){
        $_SESSION['headphoneQuantity'] += $_POST['headphoneQuantity'];
        //echo $_SESSION['pistachiosQuantity'];
        }else{

            $_SESSION['headphoneQuantity'] = $_POST['headphoneQuantity'];
        }
    }

    }else{
        header("location: login.php");
    }
        ?>
</body>
</html>