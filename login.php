<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <style> @import url("css/style.css");</style>
</head>
<body>
    <div class="header">
        <h1>Log In</h1>
    </div>
    <?php
    
    ?>
    <div class="form">
    <span><?php if(isset($_GET['msg'])) echo $_GET['msg'];?></span>
        <form action="process.php" method = "POST">
            <input class = "textField" type="text" required name = "name" placeholder="Enter Name" ><br>
            <input class = "textField" type="text" required name = "email" placeholder="Enter Email" ><br>
            <input class = "textField" required type="password" name = "password"  placeholder = "Enter Password"> <br>
            <input id = "button" type="submit" name = "login" value = "Log In">
        </form>
    </div>
    
</body>
</html>