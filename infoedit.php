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
    <link rel="stylesheet" href="lib/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="wrapper">
    <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <a href="" class="header__logo">
                            <img src="./images/logo.webp" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="search-box">
                            <div class="header__search">
                                <form action="">
                                    <span class="input-group">
                                        <button class="search-submit" type="button">
                                            <img src="https://img.icons8.com/material-outlined/24/000000/search--v1.png"/>
                                        </button>
                                    </span>
                                    <input type="text" placeholder="Tìm kiếm sản phẩm..." class="search-text">
                                </form>
                                <div class="result__box">
                                </div>
                            </div>
                            <div class="group__contact">
                                <div class="contact__phone">
                                    <p>Hỗ trợ online</p>
                                    <a href="">0947895039</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="group__account">
                            <ul class="group__account-list">
                                <li>
                                    <div class="heart__icon">
                                        <a href="">
                                            <i class="far fa-heart"></i>
                                            <span class="cart-icon__count">2</span>
                                        </a>
                                    </div>
                                    
                                </li>
                                <li>
                                    <div class="cart-icon">
                                        <a href="">
                                            <i class="fas fa-cart-arrow-down"></i>
                                            <span class="cart-icon__count">2</span>
                                        </a>
                                    </div>
                                    <div class="cart-down">

                                    </div>
                                </li>
                                <li>
                                    <div class="user">
                                        <a href="">
                                            <i class="fas fa-user"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
      
        <section id ="main">
            <div class="container ">
                <div class="break-crumb">
                    <div class="break-crumb__head">
                        <div class="home">
                            <a href="#">
                                <span>Trang chủ</span>
                            </a>
                                <span class="mr_lr">&nbsp;/ &nbsp;</span>
                        </div>
                        <div>
                            <strong>
                                <span>Chỉnh sửa thông tin</span>
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="container-infor">
                    
                    <form action=".">
                        <label class="container-infor__title" >Thông Tin Tài Khoản</label>
                        <h2 class ="container-infor__name">Khách hàng: <span>Phạm Văn Thiên</span></h2>
                        <fieldset class="container-infor__item">
                            <label>Tên Đăng nhập</label>
                            <span class="required">*</span>
                            <input type="text" class="form-control form-control-lg" placeholder=""/>
                        </fieldset>
    
                        <fieldset class="container-infor__item">
                            <label>Họ và tên </label>
                            <span class="required">*</span>
                            <input type="text" class="form-control form-control-lg" placeholder=""/>
                        </fieldset>
    
                        <fieldset class="container-infor__item">
                            <label>Số điện thoại </label>
                            <span class="required">*</span>
                            <input type="tel" class="form-control form-control-lg" placeholder=""/>
                        </fieldset>
    
                        <fieldset class="container-infor__item">
                            <label>Địa chỉ </label>
                            <span class="required">*</span>
                            <input type="email" class="form-control form-control-lg" placeholder=""/>
                        </fieldset>
    
                        <div class="container-infor__item">
                            <input class="btn-edit" type="submit" value="Cập Nhật">
                        </div>
                       
                    </form>
                </div>
               
            </div>
        </section>
        <footer id="footer">
            <div class="container">
                <div class="footer-top row">
                    <div class="col col-lg-3">
                        <a href="" class="footer-top__logo">
                            <img src="./images/logo.webp" alt="">
                        </a>
                    </div>
                    <div class="col col-lg-3">
                        <div class="box-item-info">
                            <img src="./images/ser_1.webp" alt="">
                            <div class="content-info">
                                <h3>Tiết kiệm hơn</h3>
                                <span>Tiết kiệm hơn nhờ giảm giá thường xuyên</span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3">
                        <div class="box-item-info">
                            <img src="./images/ser_2.png" alt="">
                            <div class="content-info">
                                <h3>Khách hàng VIP</h3>
                                <span>Đăng kí thành viên để nhận thẻ ưu đãi riêng</span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3">
                        <div class="box-item-info">
                            <img src="./images/ser_3.png" alt="">
                            <div class="content-info">
                                <h3>Chất lượng cao</h3>
                                <span>Sản phẩm chất lượng là ưu tiên hàng đầu</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-center row">
                    <div class="col col-lg-3">
                        <h2 class="title-menu">Liên hệ với chúng tôi</h2>
                        <ul class="list-address">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Xuân Thủy, Hà Nội, Vietnam</p>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <a href="">0947895039</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope-square"></i>
                                <a href="">sybuivan1429@gmail.com</a>
                            </li>
                            <li>
                                <h2 class="title-menu">Đăng ký nhận tin khuyến mãi</h2>
                            </li>
                        </ul>
                        <form action="">
                            <input type="text" class="seed-mail" placeholder="Nhập email của bạn...">
                        </form>
                    </div>
                    <div class="col col-lg-2">
                        <h2 class="title-menu">Dịch vụ 24/7</h2>
                        <ul class="list-service">
                            <li><a href="">Trang chủ</a></li>
                            <li><a href="">Sản phẩm</a></li>
                            <li><a href="">Bánh kẹo</a></li>
                            <li><a href="">Đồ khô</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Hệ thống bán hàng</a></li>
                            <li><a href="">Tin tức</a></li>
                        </ul>
                    </div>
                    <div class="col col-lg-2">
                        <h2 class="title-menu">Dịch vụ 24/7</h2>
                        <ul class="list-service">
                            <li><a href="">Trang chủ</a></li>
                            <li><a href="">Sản phẩm</a></li>
                            <li><a href="">Bánh kẹo</a></li>
                            <li><a href="">Đồ khô</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Hệ thống bán hàng</a></li>
                            <li><a href="">Tin tức</a></li>
                        </ul>
                    </div>
                    <div class="col col-lg-2">
                        <h2 class="title-menu">Dịch vụ 24/7</h2>
                        <ul class="list-service">
                            <li><a href="">Trang chủ</a></li>
                            <li><a href="">Sản phẩm</a></li>
                            <li><a href="">Bánh kẹo</a></li>
                            <li><a href="">Đồ khô</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Hệ thống bán hàng</a></li>
                            <li><a href="">Tin tức</a></li>
                        </ul>
                    </div>
                    <div class="col col-lg-3">
                        <h2 class="title-menu">Dịch vụ 24/7</h2>
                        <ul class="list-service">
                            <li><a href="">Trang chủ</a></li>
                            <li><a href="">Sản phẩm</a></li>
                            <li><a href="">Bánh kẹo</a></li>
                            <li><a href="">Đồ khô</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Hệ thống bán hàng</a></li>
                            <li><a href="">Tin tức</a></li>
                        </ul>
                        <img src="./images/payment_method.webp" alt="">
                    </div>
          
                </div>
                <div class="row footer-bottom">
                    <div class="col col-lg-7">
                        Bản quyền thuộc về <a href="" style="color:var(--cl-green);">Nhóm 3MPRO</a> Cung cấp bởi SAPA</div>
                    <div class="col col-lg-5 footer-nav">
                        <ul>
                            <li><a href="">Trang chủ</a></li>
                            <li><a href="">Sản phẩm</a></li>
                            <li><a href="">Bánh kẹo</a></li>
                            <li><a href="">Đồ khô, gạo</a></li>
                            <li><a href="">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>