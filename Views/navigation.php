<?php
    $act  = isset($_GET['act']) ? $GET_['act'] :"home";
    switch ($act){
        case "home":
            require_once("../home.html");
            break;
        case "product":
            require_once("product.php");
            break;
        default :
        require_once("error-404.php");
        break;
    }
      
?>