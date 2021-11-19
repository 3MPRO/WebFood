<?php
session_start();
$mod = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($mod) {
    case 'home':
        require_once('./Controllers/HomeController.php');
        $objCate = new CategoryController();
        $objCate->list();
        break;
    case 'category':    
        require_once('./Controllers/CategoryController.php');
        $objCate = new CategoryController();
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