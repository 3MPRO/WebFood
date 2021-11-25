<?php
session_start();
// unset($_SESSION['product']);
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
    case 'taikhoan':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "taikhoan";
        require_once('Controllers/LoginController.php');
        $controller_obj = new LoginController();
        if ((isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true)) {
            switch ($act) {
                case 'dangxuat':
                    $controller_obj->dangxuat();
                    break;
                case 'account':
                    $controller_obj->account();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    header('location: ?act=error');
                    break;
            }
            break;
        } else {
            if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true)) {
                switch ($act) {
                    case 'dangxuat':
                        $controller_obj->dangxuat();
                        break;
                    case 'account':
                        $controller_obj->account();
                        break;
                    case 'update':
                        $controller_obj->update();
                        break;
                    default:
                        header('location: ?act=error');
                        break;
                }
                break;
            } else {
                switch ($act) {
                    case 'login':
                        $controller_obj->login();
                        break;
                    case 'dangnhap':
                        $controller_obj->login_action();
                        break;
                    case 'dangky':
                        $controller_obj->dangky();
                        break;
                    default:
                        $controller_obj->login();
                        break;
                }
                break;
            }
        }
    case "dangky":
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "taikhoan";
        require_once('Controllers/LoginController.php');
        $controller_obj = new LoginController();
        if ((isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true)) {
            switch ($act) {
                case 'dangxuat':
                    $controller_obj->dangxuat();
                    break;
                case 'account':
                    $controller_obj->account();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    header('location: ?act=error');
                    break;
            }
            break;
        } else {
            if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true)) {
                switch ($act) {
                    case 'dangxuat':
                        $controller_obj->dangxuat();
                        break;
                    case 'account':
                        $controller_obj->account();
                        break;
                    case 'update':
                        $controller_obj->update();
                        break;
                    default:
                        header('location: ?act=error');
                        break;
                }
                break;
            } else {
                switch ($act) {
                    case 'login':
                        $controller_obj->login();
                        break;
                    case 'dangnhap':
                        $controller_obj->login_action();
                        break;
                    case 'dangky':
                        $controller_obj->dangky();
                        break;
                    default:
                        $controller_obj->login();
                        break;
                }
                break;
            }
        }  
    case "detail":
        require_once('./Controllers/ProductController.php');
        $objCate = new ProductController();
        $objCate->list();
        break;
    case "user":
        require_once('./Controllers/inforController.php');
        $objCate = new infor();
        $act = isset($_GET['check']) ? $_GET['check'] : "list";
        switch ($act) {
            case 'list':
                $objCate->list();
                break;
            case 'updateinfo':
               $objCate->updateinfo();
               break;
           default : 
           $objCate->list();     
        }
        break;
    case 'cart':
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            require_once('Controllers/CartController.php');
            $controller_obj = new CartController();
            switch ($act) {
                case 'list':
                    $controller_obj->list_cart();
                    break;
                case 'add':
                    $controller_obj->add_cart();
                    break;
                }
    default : 
        require_once('home.php');
}