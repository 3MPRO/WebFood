
<<<<<<< HEAD
=======


    <?php if(isset($_GET['cate']) )
           $cate = $_GET['cate'];?>
>>>>>>> 6a411e87896b9e4068f892064ed3694ad151d8c8
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
                            <span> <?php 
                                    echo $data_danhmuc[$cate- 1]['TenDM'] 
                            ?></span>
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
                                    <h1 ><?= $data_danhmuc[$cate -1]['TenDM'] ?></h1>
                                </div>

                                <div class="row">
                                    
                                   <?php 
                                   if($data_sanpham != NULL)
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
                                                        <img src="./public/images/Product-img/<?php echo $data_sanpham[$i]['hinhanh'] ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-fruits__infos">
                                                    <h2 class="tilte-name-product-t"><?= $data_sanpham[$i]['TenSP']?></h2>
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
  
