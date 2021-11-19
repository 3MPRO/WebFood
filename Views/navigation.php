<?php
    $act  = isset($_GET['act']) ? $_GET['act'] :"home";
    switch ($act){
        case "home":
            require_once("home.php");
            break;
        case "category":
            require_once("product.php");
            break;
        case "login":
            require_once("login.php");
            break;
        default :
        require_once("error-404.php");
        break;
    }
      
?>