<?php
session_start();
if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) {
    $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
    $act = isset($_GET['act']) ? $_GET['act'] : "admin";
    switch ($mod) {
        case 'sanpham':
            require_once('Controllers/ProductController.php');
            $controller_obj = new ProductController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
               case 'add':
                    $controller_obj->add();
                    break;
          /*      case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update(); 
                    break;*/
                default:
                    $controller_obj->list();
                    break;
            }
            break;
    }
}
?>