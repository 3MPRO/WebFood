<?php
    $act  = isset($_GET['act']) ? $_GET['act'] :"home";
    switch ($act){
        case "home":
            require_once("home.php");
            break;
        case "search":
            require_once("Search/list-search.php");
            break;
        case "product":
            require_once("product.php");
            break;
        case "login":
            require_once("login.php");
            break;
        case "detail":
            require_once("detailPr.php");
            break;
        case "user":
            require_once("infoedit.php");
            break;
        default :
        require_once("error-404.php");
        break;
    }
      
?>