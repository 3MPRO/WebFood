<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruity Fresh</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./Public/css/responsive.css">
    <link rel="stylesheet" href="./Public/css/style.css">
    <link rel="stylesheet" href="./Public/css/reset.css">
    <link rel="stylesheet" href="./Public/css/admin.css">
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./public/js/jquery.js"></script>
</head>
<body>
  <?php 
    require_once("menu.php"); 
  ?>
  <section class="main_content dashboard_part large_header_bg">
    <?php require_once("head_food/header_admin.php"); ?>
    <div class="main_content-center">

      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Tables</h1>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">
            <?php
            $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
            echo "Database " . $mod;
            ?>
          </h6>
        </div>
    <?php
     
     /*  if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) {*/
        $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
        $act = isset($_GET['act']) ? $_GET['act'] : "admin"; 
        switch ($mod) {
          case 'sanpham':
            switch ($act) {
              case 'list':
                require_once('product/sanpham/list.php');
                break;
              case 'add':
                require_once('product/addproduct.php');
                break;
              case 'edit':
                require_once('product/sanpham/edit.php');
                break;
              default:
                require_once('product/productad.php');
                break;
              }
              break;
            case 'nguoidung':
              require_once('./Controllers/UserController.php');
              $controller_obj = new NguoiDungController();
              switch ($act) {
                case 'list':
                  $controller_obj->list();
                  require_once('user/list.php');
                  break;
                case 'add':
                  require_once('user/add.php');
                  break;
                case 'detail':
                  require_once('user/detail.php');
                  break;
                case 'edit':
                  require_once('user/edit.php');
                  break;
                default:
                  $controller_obj->list();
                  require_once('user/list.php');
                  break;
              }
              break;
            case 'loaisanpham':
              switch ($act) {
                case 'list':
                  require_once('typeproduct/list.php');
                  break;
                case 'add':
                  require_once('typeproduct/add.php');
                  break;
                case 'detail':
                  require_once('typeproduct/detail.php');
                  break;
                case 'edit':
                  require_once('typeproduct/edit.php');
                  break;
                default:
                  require_once('typeproduct/list.php');
                  break;
              }
              break;
      }
   /*  } */
    ?>
    </div>

  </section>
</body>
</html>