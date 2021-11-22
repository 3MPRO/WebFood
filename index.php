<?php
session_start();
$mod = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($mod) {
   

    case 'home':
        require_once('./Controllers/HomeController.php');
        $objCate = new homeController();
        $objCate->list();
        break;
    case "search":
        require_once('./Controllers/ProductController.php');
        $objCate = new ProductController();
        $objCate->list();
        break;
    case 'product':    
        require_once('./Controllers/HomeController.php');
        $objCate = new homeController();
        $objCate->list();
        break;
    case 'login': 
        require_once('./Controllers/LoginController.php');
        $objCate = new LoginController();
        $objCate->list();
        break;
    case "detail":
        require_once('./Controllers/ProductController.php');
        $objCate = new ProductController();
        $objCate->list();
        break;
    case "user":
        require_once('./Controllers/inforController.php');
        $objCate = new infor();
        $objCate->list();
        break;
    default : 
        require_once('home.php');
}