<?php
session_start();
$mod = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($mod) {
    case 'home':
        require_once('./Controllers/HomeController.php');
        $objCate = new CategoryController();
        $objCate->list();
        break;
    case 'product':    
        require_once('./Controllers/ProductController.php');
        $objCate = new ProductController();
        $objCate->list();
        break;
    case 'login': 
        require_once('./Controllers/LoginController.php');
        $objCate = new CategoryController();
        $objCate->list();
        break;
    default : 
        require_once('home.php');
}