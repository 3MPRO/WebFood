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
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
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

    <nav id="nav">
        <div class="container">
            <ul class="nav-list">
                <li class="nav-list__item active"><a href="">Trang chủ</a></li>
                <li class="nav-list__item">
                    <a href="">
                        Sản phẩm
                    </a>
                    <i class="fas fa-chevron-down"></i>
                    <ul class="nav-item__down">
                        <li class="nav-item__down-item"><a href="">Gia vi</a></li>
                        <li class="nav-item__down-item"><a href="">Dầu ăn</a></li>
                        <li class="nav-item__down-item"><a href="">Bánh kẹo</a></li>
                        <li class="nav-item__down-item"><a href="">Rau củ quả</a></li>
                        <li class="nav-item__down-item"><a href="">Sữa uống</a></li>
                    </ul>
                </li>
                <li class="nav-list__item"><a href="">Bánh kẹo</a></li>
                <li class="nav-list__item"><a href="">Đồ khô, gạo</a></li>
                <li class="nav-list__item"><a href="">Liên hệ</a></li>
                <li class="nav-list__item"><a href="">Tin tức</a></li>
            </ul>
        </div>
    </nav>
    <section id="product">
        <div class="container">
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
                            <span>Hít kẹo</span>
                        </strong>
                    </div>
                </div>
            </div>
            <div class="product__content">
                <div class="container">
                    <div class="row">
                        <div class="nav-left col-lg-3">
                            <div class="nav-left__category">
                                <h1>Danh mục</h1>
                                <ul class="nav-left-category__list">
                                    <li class="category__item"><a href="">Trang chủ</a> </li>
                                    <li class="category__item"><a href="">Sản phẩm</a></li>
                                    <li class="category__item"><a href="">bánh kẹo</a></li>
                                    <li class="category__item"><a href="">Đồ khô, gạo</a></li>
                                    <li class="category__item"><a href="">Liên hệ</a></li>
                                    <li class="category__item"><a href="">Tin tức</a></li>
                                    <li class="category__item"><a href="">Hệ thống cửa hàng</a></li>
                                </ul>
                            </div>

                            <div class="nav-left__filter-product">
                                <div class="filter-product__collocation">
                                    <h1>Sắp xếp</h1>
                                    <ul class="filter-product__collocation">
                                        <li class="filter-collocation__item"><input type ="radio" name ="radio">Tên A - Z </li>
                                        <li class="filter-collocation__item"><input type ="radio" name ="radio">Tên Z - A</li>
                                        <li class="filter-collocation__item"><input type ="radio" name ="radio">Giá thấp đến cao </li>
                                        <li class="filter-collocation__item"><input type ="radio" name ="radio">Giá cao đến thấp</li>
                                        <li class="filter-collocation__item"><input type ="radio" name ="radio">Mới nhất </li>
                                        <li class="filter-collocation__item"><input type ="radio" name ="radio">Cũ nhất</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="nav-left__filter-product">
                                <div class="filter-product__origin">
                                    <h1>Nguồn gốc</h1>
                                    <ul class="filter-product__origin">
                                        <li class="filter-origin__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i> Đà lạt</a> </li>
                                        <li class="filter-origin__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i> Nhập khẩu</a></li>
                                        <li class="filter-origin__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i> Trong nước</a> </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="nav-left__filter-product">
                                <div class="filter-product__price">
                                    <h1>Theo mức giá</h1>
                                    <ul class="filter-product__price">
                                        <li class="filter-price__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i>Dưới 100.000đ</a> </li>
                                        <li class="filter-price__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i>Từ 100.000đ đến 200.000đ</a></li>
                                        <li class="filter-price__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i>Từ 200.000đ đến 400.000đ</a> </li>
                                        <li class="filter-price__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i>Từ 400.000đ đến 600.000đ</a> </li>
                                        <li class="filter-price__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i>Từ 600.000đ đến 800.000đ</a></li>
                                        <li class="filter-price__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i>Từ 800.000đ đến 1 triệu</a> </li>
                                        <li class="filter-price__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i>Từ 1 đến 2 triệu</a> </li>
                                        <li class="filter-price__item"><a href=""><i class="fas swich-icon fa-toggle-on fa-toggle-off"></i>Trên 2 triệu</a> </li>

                                    </ul>
                                </div>

                            </div>
                            <div class="nav-left__filter-product">
                                <div class="filter-product__category">
                                    <h1>Loại</h1>
                                    <ul class="filter-product__category">
                                        <li class="filter-category__item"><a href=""> <i class="fas swich-icon fa-toggle-on fa-toggle-off"></i> Hải sản</a> </li>
                                        <li class="filter-category__item"><a href=""> <i class="fas swich-icon fa-toggle-on fa-toggle-off"></i> Hoa quả</a></li>
                                        <li class="filter-category__item"><a href=""> <i class="fas swich-icon fa-toggle-on fa-toggle-off"></i> Thịt tươi</a> </li>
                                    </ul>
                                </div>

                            </div>


                        </div>
                        <div class="product-list col-lg-9">
                            <div class="container">
                                <div class="product-list__title row">
                                    <h1 >Hít kẹo</h1>
                                </div>

                                <div class="row">
                                    
                                    <?php
                                    if($data_sanpham2 != NULL)
                                    {
                                     for($i=0 ;$i <4; $i++){ ?>
                                        <div class="col col-product__item">
                                            <form action="" >
                                                <div>
                                            <div class="product-item__sale-off">
                                                    <span class="home-product-item__percent">10%</span>
                                                    <label class ="home-product-item__label" for="">Giảm</label>
                                            </div>
                                            <a href=""><i class="product-item-icon far fa-heart"></i></a>
                                            </div>
                                                <div class="product-img">
                                                    <a href="">
                                                        <span class ="img--hover"></span> 
                                                        <img src="<?php echo $data_sanpham2[$i]['HinhAnh1'] ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-fruits__infos">
                                                    <h2 class="tilte-name-product-t">500g cá khô sạch con to</h2>
                                                    <div>
                                                    <span class="price-new">60.000đ</span>
                                                    <button class="button-add-product button-add-product--view">Cho vào giỏ</button>
                                                    <span class="price-old">60.000đ</span>
                    
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                   <?php } 
                                    }
                                    else 
                                        echo "Không lấy dc dữ liệu";
                                   
                                   ?>
                                   
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>


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
</body>

</html>