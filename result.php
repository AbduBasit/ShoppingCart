<?php session_start();
if(isset($_SESSION['name'])){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
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
            <h1>Check Out </h>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12 products">
            <h2>Your Shoppings</h2>
            <table >
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price Per Product</th>
                    <th>Total Price</th>
                    
                </tr>
            <?php
            $p1 = 0;$p2 = 0;$p3 = 0;$p4 = 0;$p5 = 0;$p6 = 0;

            if(isset($_SESSION['sunGlassesQuantity'])){
                 ?>
                <tr>
                    <td>Sun Glasses</td>
                    <td><?php echo $_SESSION['sunGlassesQuantity'];?></td>
                    <td>RS <?php echo $_SESSION['products']['generalItems']['sunGlasses'];?></td>
                    <td>RS <?php echo $p1 = (($_SESSION['products']['generalItems']['sunGlasses'])*($_SESSION['sunGlassesQuantity']));?></td>
                </tr>
            <?php    
            }
            if(isset($_SESSION['headphoneQuantity'])){ ?>
                <tr>
                    <td>Headphone</td>
                    <td><?php echo $_SESSION['headphoneQuantity'];?></td>
                    <td>RS <?php echo $_SESSION['products']['generalItems']['headphone'];?></td>
                    <td>RS <?php echo $p2 = (($_SESSION['products']['generalItems']['headphone'])*($_SESSION['headphoneQuantity']));?></td>
                </tr>
            <?php    
            }
            if(isset($_SESSION['almondQuantity'])){ ?>
                <tr>
                    <td>Almond</td>
                    <td><?php echo $_SESSION['almondQuantity'];?></td>
                    <td>RS <?php echo $_SESSION['products']['dryFruits']['almond'];?></td>
                    <td>RS <?php echo $p3 = (($_SESSION['products']['dryFruits']['almond'])*($_SESSION['almondQuantity']));?></td>
                </tr>
            <?php    
            }
            if(isset($_SESSION['pistachiosQuantity'])){ ?>
                <tr>
                    <td>Pistachios</td>
                    <td><?php echo $_SESSION['pistachiosQuantity'];?></td>
                    <td>RS <?php echo $_SESSION['products']['dryFruits']['pistachios'];?></td>
                    <td>RS <?php echo $p4 = (($_SESSION['products']['dryFruits']['pistachios'])*($_SESSION['pistachiosQuantity']));?></td>
                </tr>
            <?php    
            }
            if(isset($_SESSION['soapQuantity'])){ ?>
                <tr>
                    <td>Soap</td>
                    <td><?php echo $_SESSION['soapQuantity'];?></td>
                    <td>RS <?php echo $_SESSION['products']['cosmatics']['soap'];?></td>
                    <td>RS <?php echo $p5 = (($_SESSION['products']['cosmatics']['soap'])*($_SESSION['soapQuantity']));?></td>
                </tr>
            <?php    
            }
            if(isset($_SESSION['lotionQuantity'])){ ?>
                <tr>
                    <td>Lotion</td>
                    <td><?php echo $_SESSION['lotionQuantity'];?></td>
                    <td>RS <?php echo $_SESSION['products']['cosmatics']['lotion'];?></td>
                    <td>RS <?php echo $p6 = (($_SESSION['products']['cosmatics']['lotion'])*($_SESSION['lotionQuantity']));?></td>
                </tr>
            <?php    
            } ?>
            <tr>
                
                <td id = "grandTotal" colspan = 5> Grand Total = RS <?php echo($p1+$p2+$p3+$p4+$p5+$p6);?> </td>




            </tr>
            <?php
            
            
            ?>
            </table>
            
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