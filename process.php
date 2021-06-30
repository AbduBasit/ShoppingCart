<?php
session_start();

if(isset($_POST['login'])){
    
    
    //echo $_SESSION['email'];
    $validation = array("email" => "abbasitmemon1@gmail.com", "password" => "123456789");
    if($_POST['email'] == $validation['email'] && $_POST['password'] == $validation['password']){
        $_SESSION['email']      = $_POST['email'];
        $_SESSION['password']   = $_POST['password'];
        $_SESSION['name']       = $_POST['name'];
        header('location: dashboard.php');
    }else{
        header('location: login.php?msg=Incorrect Cradentials');
    }
}else{
    header('location: login.php');
}




?>