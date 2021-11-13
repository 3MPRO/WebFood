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
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <?php include('./header.php'); ?>

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
            <div class="content">
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
                                        <li class="filter-collocation__item"><a href="">Tên A - Z</a> </li>
                                        <li class="filter-ollocation__item"><a href="">Tên Z - A</a></li>
                                        <li class="filter-collocation__item"><a href="">Giá thấp đến cao</a> </li>
                                        <li class="filter-collocation__item"><a href="">Giá cao đến thấp</a></li>
                                        <li class="filter-collocation__item"><a href="">Mới nhất</a> </li>
                                        <li class="filter-collocation__item"><a href="">Cũ nhất</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="nav-left__filter-product">
                                <div class="filter-product__origin">
                                    <h1>Nguồn gốc</h1>
                                    <ul class="filter-product__origin">
                                        <li class="filter-origin__item"><a href="">Đà lạt</a> </li>
                                        <li class="filter-origin__item"><a href="">Nhập khẩu</a></li>
                                        <li class="filter-origin__item"><a href="">Trong nước</a> </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="nav-left__filter-product">
                                <div class="filter-product__price">
                                    <h1>Theo mức giá</h1>
                                    <ul class="filter-product__price">
                                        <li class="filter-price__item"><a href="">Dưới 100.000đ</a> </li>
                                        <li class="filter-price__item"><a href="">Từ 100.000đ đến 200.000đ</a></li>
                                        <li class="filter-price__item"><a href="">Từ 200.000đ đến 400.000đ</a> </li>
                                        <li class="filter-price__item"><a href="">Từ 400.000đ đến 600.000đ</a> </li>
                                        <li class="filter-price__item"><a href="">Từ 600.000đ đến 800.000đ</a></li>
                                        <li class="filter-price__item"><a href="">Từ 800.000đ đến 1 triệu</a> </li>
                                        <li class="filter-price__item"><a href="">Từ 1 đến 2 triệu</a> </li>
                                        <li class="filter-price__item"><a href="">Trên 2 triệu</a> </li>

                                    </ul>
                                </div>

                            </div>
                            <div class="nav-left__filter-product">
                                <div class="filter-product__category">
                                    <h1>Loại</h1>
                                    <ul class="filter-product__category">
                                        <li class="filter-category__item"><a href="">Đà lạt</a> </li>
                                        <li class="filter-category__item"><a href="">Nhập khẩu</a></li>
                                        <li class="filter-category__item"><a href="">Trong nước</a> </li>
                                    </ul>
                                </div>

                            </div>


                        </div>
                        <div class="product-list col-lg-9">
                            <div class="container">
                                <div class="row">
                                    <h1>Hít kẹo</h1>
                                </div>
                                <div class="row"> 
                                    <div class="col ">
                                        <form action="" class="col-product__item">
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
                                                    <img src="./images/pro20-grande.webp" alt="">
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
                                 
                                   
                                    
                                    
                                    


                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>


        </div>


        </div>

    </section>
    <?php include('./footer.php'); ?>
</body>

</html>