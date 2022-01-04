
<main id="main">
<div class="container">
    <div class="break-crumb">
        <div class="break-crumb__head">
            <div class="home">
                <a href="#">
                    <span>Trang chủ</span>
                </a>
                <span class="mr_lr">&nbsp;/ &nbsp;</span>
                <a href="#">
                    <span>Sản phẩm nổi bật</span>
                </a>
                <span class="mr_lr">&nbsp;/ &nbsp;</span>
            </div>
            <div>
                <strong>
                    <span><?php echo $data_sanpham[0]['TenSP']; ?></span>
                </strong>
            </div>
        </div>
    </div>
<?php  
    if(isset($_GET['km'])){
        $km = $_GET['km'];
        $status = true;
    }else{
        $status = false;
    }
?>
    <div class="row mb-4">
        <div class="col col-lg-5">
            <div class="product-detail-left">
                <div id="product-detail-left__thumbnail" class="<?php if($status == true) echo "product-detail-left__thumbnail--sale "?>">
                    <img src="./public/images/<?php echo $data_sanpham[0]['hinhanh']; ?>" alt="" class="product-detail-left__image-main">
                </div>
                <div class="product-detail-left__list-thumb">
                    <ul>
                        <?php for ($i=0; $i < count($data_sanpham) ; $i++) { ?>
                            <li class=""><img src="./public/images/<?php echo $data_sanpham[$i]['hinhanh'] ?>" alt=""></li>
                        <?php } ?>
                        <!-- <li><img src="./public/images/pro29-grande.jpg" alt=""></li>
                        <li><img src="./public/images/pro28-grande.jpg" alt=""></li> -->
                    </ul>
                    <div class="product-detail-left__control">
                        <span class="product-detail-left__control-left">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                        <span class="product-detail-left__control-right">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-5">
            <div class="product-detail-main">
                <h2 class="tilte-name-product-detail"><?php echo $data_sanpham[0]['TenSP']; ?></h2>
                <div class="product-detail-main__flex">
                    <ul class="product-detail-main__vote">
                        <span>5.0</span>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                    <div class="count-vote">
                        <span>3</span>
                        <div>Đánh giá</div>
                    </div>
                    <div class="count-producted">
                        <span>3</span>
                        <div>Đã bán</div>
                    </div>
                </div>
                <div class="product-detail-main__price">
                    <span class="product-detail-main__price-new"><?php echo number_format($data_sanpham[0]['DonGia']); ?> đ</span>
                    <?php if($status == true) { ?>
                    <span class="product-detail-price__old"><?php echo number_format($data_sanpham[0]['giaCu']); ?> đ</span>
                    <span class="product-detail-price__sale"><?= $km ?>%</span>
                    <?php } ?>
                </div>
            </div>
            <form action="./Controllers/CartController.php" method="post">
                <div class="custom-quantity">
                    <a class="btn-minus" href="?act=cart&xuli=delete&id=<?php echo $data_sanpham[0]['MaSP'];?>" >
                        <i class="fas fa-minus"></i>
                    </a>
                    <input type="text" class="qty-input" value="1" name="slsanpham">
                    <a class="btn-plus" href="?act=cart&xuli=update&id=<?php echo $data_sanpham[0]['MaSP'];?>">
                        <i class="fas fa-plus"></i>
                    </a>
                    <span style="padding-left: 12px;">1457 sản phẩm có sẵn</span>
                </div>
                <div class="group-button-add">
                    <a href="?act=cart&xuli=add&id=<?php echo $data_sanpham[0]['MaSP']; ?>&sl=1" class="add-cart btn-add-cart" data-id="<?php echo $data_sanpham[0]['MaSP']; ?>">Cho vào giỏ hàng</a>
                </div>
            </form>
        </div>
        <div class="col col-lg-2">
            <a href="" class="product-detail-banner">
                <img src="./public/images/banner_detail.webp" alt="">
            </a>
        </div>
    </div>
    <section id="product-dry" class="product-related">
        <div class="container">
            <div class="populator__head">
                <div>
                    <h2 class="populator__head-title">
                        <a href="">Các sản phẩm liên quan</a>
                    </h2>
                </div>
            </div>
            <div class="owl-carousel owl-theme" id="owl-slider-concerning">
                <div class="row">
                    <?php foreach ($data_lq as $row) { 
                        if ($row['GiaTriKM'] == 0) {
                            $status = "product-item__sale-off--none";
                            $km = "no";
                            $makm = "";
                        }
                        else {
                            $status = "";
                            $makm = "&km=" .$row['MaSP'];
                        }?>
                        <div class="col col-lg-3 col-md-3">
                            <div class="col-product__item sale-home <?= $status?>">
                                <form action="" >
                                    <div>
                                    <div class="product-item__sale-off <?= $status?>">
                                        <span class="home-product-item__percent"><?php echo $row['GiaTriKM'] ?>%</span>
                                        <label class ="home-product-item__label" for="">Giảm</label>
                                    </div>
                                    <a href="">
                                        <i data-heart="<?php echo $row['MaSP'] ?>"  class="icon-heart-element product-item-icon far fa-heart"></i>
                                    </a>
                                    </div>
                                    <div class="product-img">
                                        <a href="?act=detail&sp=<?=$row['MaSP']?><?= $makm ?>" style="display: block;">
                                            <span class ="img--hover"></span> 
                                            <img src="./public/images/<?php echo $row['hinhanh'] ?>" alt="">
                                        </a>
                                        <p class="text-sale">Sale</p>
                                    </div>
                                    <div class="product-fruits__infos">
                                        <h2 class="tilte-name-product-t"><?= $row['TenSP']?></h2>
                                        <div>
                                        <span class="price-new"><?= number_format( $row['DonGia']) ?>đ</span>
                                        <a href="?act=cart&xuli=add&id=<?=$row['MaSP']?>" class="button-add-product button-add-product btn-add-cart button-add-product--view">Cho vào giỏ</a>
                                        <span class="price-old"><?php echo number_format($row['DonGia']+ 20000) ?>đ</span>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <div class="row mb-5">
        <div class="col col-lg-8">
            <div class="product_getcontent">
                <div class="product-tab-title">
                    <span>Thông tin sản phẩm</span>
                </div>
                <div class="product-short__desc">
                    Với vị the mát, sảng khoái của hương bạc hà. Kẹo Icedrop siêu mát lạnh hũ 28g mang đến cho bạn sự tươi mát, kích thích vị giác và tinh thần làm việc. Kẹo Icedrop giúp bạn có hơi thở thơm mát, tự tin giao tiếp và thể hiện bản thân mình.
                </div>
                <ul class="infor-product__detail">
                    <li>
                        <span>Loại kẹo</span>
                        <div>Siêu mát lạnh</div>
                    </li>
                    <li>
                        <span>Khối lượng</span>
                        <div>30g</div>
                    </li>
                    <li>
                        <span>Thành phần</span>
                        <div>Sorbitol, Xylitol, chất tạo ngọt tổng hợp, màu thực phẩm tổng hợp,..</div>
                    </li>
                    <li>
                        <span>Hạn sử dụng</span>
                        <div>7 tháng</div>
                    </li>
                    <li>
                        <span>Nơi xuất xứ</span>
                        <div>Trung Quốc</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col col-lg-4">
            <div class="group-type-product">
                <h2>Nhóm hàng thường mua</h2>
                <div class="list-group-type">
                    <a href="">
                        <img src="https://cdn.tgdd.vn/Products/Images/8686/bhx/thit-ca-hai-san-202112291138582954.png" alt="">
                        <span>Thịt cá, hải sản</span>
                    </a>
                    <a href="">
                        <img src="https://cdn.tgdd.vn/Products/Images/8686/bhx/thit-ca-hai-san-202112291138582954.png" alt="">
                        <span>Thịt cá, hải sản</span>
                    </a>
                    <a href="">
                        <img src="https://cdn.tgdd.vn/Products/Images/8686/bhx/thit-ca-hai-san-202112291138582954.png" alt="">
                        <span>Thịt cá, hải sản</span>
                    </a>
                    <a href="">
                        <img src="https://cdn.tgdd.vn/Products/Images/8686/bhx/thit-ca-hai-san-202112291138582954.png" alt="">
                        <span>Thịt cá, hải sản</span>
                    </a>
                    <a href="">
                        <img src="https://cdn.tgdd.vn/Products/Images/8686/bhx/thit-ca-hai-san-202112291138582954.png" alt="">
                        <span>Thịt cá, hải sản</span>
                    </a>
                    <a href="">
                        <img src="https://cdn.tgdd.vn/Products/Images/8686/bhx/thit-ca-hai-san-202112291138582954.png" alt="">
                        <span>Thịt cá, hải sản</span>
                    </a>
                    <a href="">
                        <img src="https://cdn.tgdd.vn/Products/Images/8686/bhx/thit-ca-hai-san-202112291138582954.png" alt="">
                        <span>Thịt cá, hải sản</span>
                    </a>
                    <a href="">
                        <img src="https://cdn.tgdd.vn/Products/Images/8686/bhx/thit-ca-hai-san-202112291138582954.png" alt="">
                        <span>Thịt cá, hải sản</span>
                    </a>
                    <a href="">
                        <img src="https://cdn.tgdd.vn/Products/Images/8686/bhx/thit-ca-hai-san-202112291138582954.png" alt="">
                        <span>Thịt cá, hải sản</span>
                    </a>
                    <a href="">
                        <img src="https://cdn.tgdd.vn/Products/Images/8686/bhx/thit-ca-hai-san-202112291138582954.png" alt="">
                        <span>Thịt cá, hải sản</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Đánh giá -->
    <div class="row md-5">
        <div class="box-rating col col-lg-8">
            <div class="product-tab-title">
                <span>Đánh giá sản phẩm</span>
            </div>
            <div class="rating-box">
                <div class="lrb">
                    <div class="average-rating orange">
                        <div>
                            <b>5.0</b>
                        </div>
                        <div>
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <span>3 đánh giá</span>
                        </div>
                    </div>
                </div>
                <div class="rrb">
                    <ul class="list-star">
                        <li>
                            <span>5 <i class="fas fa-star"></i></span>
                            <div class="rating-bar">
                                <div class="rating-bar__default rating-bar__in"></div>
                            </div>
                            <span>3 đánh giá</span>
                        </li>
                        <li>
                            <span>0 <i class="fas fa-star"></i></span>
                            <div class="rating-bar">
                                <div class="rating-bar__default rating-bar__none"></div>
                            </div>
                            <span>0 đánh giá</span>
                        </li>
                        <li>
                            <span>0 <i class="fas fa-star"></i></span>
                            <div class="rating-bar">
                                <div class="rating-bar__default rating-bar__none"></div>
                            </div>
                            <span>0 đánh giá</span>
                        </li>
                        <li>
                            <span>0 <i class="fas fa-star"></i></span>
                            <div class="rating-bar">
                                <div class="rating-bar__default rating-bar__none"></div>
                            </div>
                            <span>0 đánh giá</span>
                        </li>
                        <li>
                            <span>5 <i class="fas fa-star"></i></span>
                            <div class="rating-bar">
                                <div class="rating-bar__default rating-bar__none"></div>
                            </div>
                            <span>0 đánh giá</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="list-comment-product">
                <div class="list-comment-product__item">
                    <div class="cmt-heading">
                        <span>Sỹ bùi</span> 
                        <ul>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                        </ul>
                        <span>
                            <i class="fas fa-check"></i>
                            Đã mua
                        </span>
                    </div>
                    <div class="comment-text">
                        Sản phẩm phù hợp và giá cả phải chăng , đã tin dùng và thường xuyên mua sử dụng sản phẩm này tại Bách Hoá xanh
                    </div>
                    <div class="comment-time">
                            <i class="far fa-calendar-times"></i>
                            1 tháng trước
                        </div>
                </div>
                <div class="list-comment-product__item">
                    <div class="cmt-heading">
                        <span>Sỹ bùi</span> 
                        <ul>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                        </ul>
                        <span>
                            <i class="fas fa-check"></i>
                            Đã mua
                        </span>
                    </div>
                    <div class="comment-text">
                        Sản phẩm phù hợp và giá cả phải chăng , đã tin dùng và thường xuyên mua sử dụng sản phẩm này tại Bách Hoá xanh
                    </div>
                    <div class="comment-time">
                        <i class="far fa-calendar-times"></i>
                        1 tháng trước
                    </div>
                </div>
                <div class="list-comment-product__item">
                    <div class="cmt-heading">
                        <span>Sỹ bùi</span> 
                        <ul>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                        </ul>
                        <span>
                            <i class="fas fa-check"></i>
                            Đã mua
                        </span>
                    </div>
                    <div class="comment-text">
                        Sản phẩm phù hợp và giá cả phải chăng , đã tin dùng và thường xuyên mua sử dụng sản phẩm này tại Bách Hoá xanh
                    </div>
                    <div class="comment-time">
                        <i class="far fa-calendar-times"></i>
                        1 tháng trước
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-author">
        <!-- comments -->
        <div class="post-comments">
            <!-- comment -->
            <div class="fb-comments" data-href="https://dxdbloger.000webhostapp.com?act=detail&id=<?= $data_sanpham[0]['TenSP']; ?>" data-numposts="5" data-width=""></div>
            <!-- /comment -->
        </div>
        <!-- /comments -->
    </div>
</div>
</main>