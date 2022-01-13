<section id="slider">
    <div class="container">
        <ul class="slider-list">
            <?php 
                foreach($data_banner as $banner) {
                    ?>
                    <li class="slider-list__item">
                        <a href="">
                            <img src="./public/<?php echo $banner['HinhAnh'] ?>" alt="">
                        </a>
                    </li>
            <?php } ?>
        </ul>
    </div>
</section>
<section id="category">
    <div class="container">
        <h2 class="category-title">Danh mục</h2>
        <div class="category-list">
            <?php
                foreach ($data_danhmuc as $item) {?>
                    <div class="category-list__item">
                        <a href="?act=product&cate=<?= $item['MaDM']?>&page=1" class="category-list__item-link">
                            <img src="./public/images/<?= $item['hinhAnhDm'] ?>" alt="">
                        </a>
                        <h3 class="category-item__name"><?= $item['TenDM']?></h3>
                    </div>
                 <?php } ?>
        </div>
    </div>
</section>
<section id="product-sale">
    <div class="container">
        <div class="product-sale-top">
            <div class="product-sale-text">
                <a href="">Giá sốc mỗi ngày</a>
                <p>Sản phẩm giảm giá hỗ trợ khách hàng</p>
            </div>
            <div class="product-sale-count">
                <div class="wrapper-count">
                    <div class="countdown-block">
                        <span class="days time-elem">
                        <span class="top">00</span>
                        <span class="top-back">
                            <span>00</span>
                        </span>
                        <span class="bottom">00</span>
                        <span class="bottom-back">
                            <span>00</span>
                        </span>
                        </span>
                    </div>
                    <div class="countdown-block">
                        <span class="hours time-elem">
                        <span class="top">00</span>
                        <span class="top-back">
                            <span>00</span>
                        </span>
                        <span class="bottom">00</span>
                        <span class="bottom-back">
                            <span>00</span>
                        </span>
                        </span>
                    </div>
                    <div class="countdown-block">
                        <span class="minutes time-elem">
                        <span class="top">00</span>
                        <span class="top-back">
                            <span>00</span>
                        </span>
                        <span class="bottom">00</span>
                        <span class="bottom-back">
                            <span>00</span>
                        </span>
                        </span>
                    </div>
                    <div class="countdown-block">
                        <span class="seconds time-elem">
                        <span class="top">00</span>
                        <span class="top-back">
                            <span>00</span>
                        </span>
                        <span class="bottom">00</span>
                        <span class="bottom-back">
                            <span>00</span>
                        </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-product-sale owl-carousel owl-theme" id="product-sale-slider">
            <?php 
                for ($i = 0; $i < (count($data_khuyenmai)); $i++) {
                    ?>
                    <div class="col-product__item sale-home">
                        <form action="" >
                            <div>
                            <div class="product-item__sale-off">
                                <span class="home-product-item__percent"><?php echo $data_khuyenmai[$i]['GiaTriKM'] ?>%</span>
                                <label class ="home-product-item__label" for="">Giảm</label>
                            </div>
                            <a href="">
                                <i data-heart="<?php echo $data_khuyenmai[$i]['MaSP'] ?>"  class="icon-heart-element product-item-icon far fa-heart"></i>
                            </a>
                            </div>
                            <div class="product-img">
                                <a href="?act=detail&sp=<?=$data_khuyenmai[$i]['MaSP']?>&km=<?php echo $data_khuyenmai[$i]['GiaTriKM']; ?>" style="display: block;">
                                    <span class ="img--hover"></span> 
                                    <img src="./public/images/<?php echo $data_khuyenmai[$i]['hinhanh'] ?>" alt="">
                                </a>
                                <p class="text-sale">Sale</p>
                            </div>
                            <div class="product-fruits__infos">
                                <h2 class="tilte-name-product-t"><?= $data_khuyenmai[$i]['TenSP']?></h2>
                                <div>
                                <span class="price-new"><?= number_format( $data_khuyenmai[$i]['DonGia']) ?>đ</span>
                                <a href="?act=cart&xuli=add&id=<?=$data_khuyenmai[$i]['MaSP']?>" class="button-add-product button-add-product btn-add-cart button-add-product--view">Cho vào giỏ</a>
                                <span class="price-old"><?php echo number_format($data_khuyenmai[$i]['giaCu']) ?>đ</span>

                                </div>
                            </div>
                        </form>
                    </div>
                <?php } ?>
        </div>
    </div>
</section>
<section id="populator">
    <div class="container">
        <div class="populator__head">
            <div>
                <h2 class="populator__head-title">
                    <a href="">Gian hàng nỗi bật</a>
                </h2>
                <p class="populator__head-desc">Sản phẩm được khách hàng ưa chuộng nhất</p>
            </div>
        </div>
        <div class="row">
        <?php 
            for ($i = 0; $i < (count($data_arr_sanphamnoibat)); $i++) {
                // print_r($data_arr_sanphamnoibat[$i][0]['TenSP']);
                if ($data_arr_sanphamnoibat[$i][0]['GiaTriKM'] == 0) {
                    $status = "product-item__sale-off--none";
                    $km = "no";
                    $makm = "";
                }
                else {
                    $status = "";
                    $makm = "&km=" .$data_arr_sanphamnoibat[$i][0]['GiaTriKM'];
                }
                ?>
                <div class="col col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="col-product__item sale-home <?= $status?>">
                        <form action="" >
                            <div>
                            <div class="product-item__sale-off <?= $status?>">
                                <span class="home-product-item__percent"><?php echo $data_arr_sanphamnoibat[$i][0]['GiaTriKM'] ?>%</span>
                                <label class ="home-product-item__label" for="">Giảm</label>
                            </div>
                            <a href="">
                                <i data-heart="<?php echo $data_arr_sanphamnoibat[$i][0]['MaSP'] ?>"  class="icon-heart-element product-item-icon far fa-heart"></i>
                            </a>
                            </div>
                            <div class="product-img">
                                <a href="?act=detail&sp=<?=$data_arr_sanphamnoibat[$i][0]['MaSP']?><?= $makm ?>" style="display: block;">
                                    <span class ="img--hover"></span> 
                                    <img src="./public/images/<?php echo $data_arr_sanphamnoibat[$i][0]['hinhanh'] ?>" alt="">
                                </a>
                                <p class="text-sale">Sale</p>
                            </div>
                            <div class="product-fruits__infos">
                                <h2 class="tilte-name-product"><?= $data_arr_sanphamnoibat[$i][0]['TenSP']?></h2>
                                <div>
                                <span class="price-new"><?= number_format( $data_arr_sanphamnoibat[$i][0]['DonGia']) ?>đ</span>
                                <a href="?act=cart&xuli=add&id=<?=$data_arr_sanphamnoibat[$i][0]['MaSP']?>" class="button-add-product button-add-product btn-add-cart button-add-product--view">Cho vào giỏ</a>
                                <span class="price-old"><?php echo number_format($data_arr_sanphamnoibat[$i][0]['giaCu']) ?>đ</span>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        <?php }?>
        </div>
    </div>
</section>
<section id="product-top">
    <div class="container">
        <div class="populator__head">
            <div>
                <h2 class="populator__head-title">
                    <a href="">Sản phẩm bán chạy</a>
                </h2>
                <p class="populator__head-desc">Sản phẩm được khách hàng ưa chuộng nhất</p>
            </div>
        </div>
        <div class="row">
        <?php 
                for ($i = 0; $i < (count($data_arr_topsp)); $i++) {
                    // print_r($data_arr_topsp[$i][0]['TenSP']);
                    if ($data_arr_topsp[$i][0]['GiaTriKM'] == 0) {
                        $status = "product-item__sale-off--none";
                        $km = "no";
                        $makm = "";
                    }
                    else {
                        $status = "";
                        $makm = "&km=" .$data_arr_topsp[$i][0]['GiaTriKM'];
                    }
                    ?>
                    <div class="col col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="col-product__item sale-home <?= $status?>">
                           <form action="" >
                               <div>
                               <div class="product-item__sale-off <?= $status?>">
                                   <span class="home-product-item__percent"><?php echo $data_arr_topsp[$i][0]['GiaTriKM'] ?>%</span>
                                   <label class ="home-product-item__label" for="">Giảm</label>
                               </div>
                               <a href="">
                                   <i data-heart="<?php echo $data_arr_topsp[$i][0]['MaSP'] ?>"  class="icon-heart-element product-item-icon far fa-heart"></i>
                               </a>
                               </div>
                               <div class="product-img">
                                   <a href="?act=detail&sp=<?=$data_arr_topsp[$i][0]['MaSP']?><?= $makm ?>" style="display: block;">
                                       <span class ="img--hover"></span> 
                                       <img src="./public/images/<?php echo $data_arr_topsp[$i][0]['hinhanh'] ?>" alt="">
                                   </a>
                                   <p class="text-sale">Sale</p>
                               </div>
                               <div class="product-fruits__infos">
                                   <h2 class="tilte-name-product"><?= $data_arr_topsp[$i][0]['TenSP']?></h2>
                                   <div>
                                   <span class="price-new"><?= number_format( $data_arr_topsp[$i][0]['DonGia']) ?>đ</span>
                                   <a href="?act=cart&xuli=add&id=<?=$data_arr_topsp[$i][0]['MaSP']?>" class="button-add-product button-add-product btn-add-cart button-add-product--view">Cho vào giỏ</a>
                                   <span class="price-old"><?php echo number_format($data_arr_topsp[$i][0]['giaCu']) ?>đ</span>
   
                                   </div>
                               </div>
                           </form>
                       </div>
                    </div>
            <?php }?>
        </div>
    </div>
</section>
<section id="product-fruits">
    <div class="container">
        <div class="populator__head">
            <div>
                <h2 class="populator__head-title">
                    <a href="?act=product&cate=1&page=1">Gian hàng hoa quả</a>
                </h2>
                <p class="populator__head-desc">Sản phẩm tươi ngon mới nhất</p>
            </div>
            <a href="?act=product&cate=1&page=1" class="populator__head-all">
                <p>Xem tất cả</p>
                <i class="fas fa-long-arrow-alt-right"></i>
            </a>
        </div>
        <div class="owl-carousel owl-theme" id="owl-fruilt-slider">
            <?php 
                for ($i = 0; $i < (count($data_sanpham1)); $i++) {
                    if ($data_sanpham1[$i]['GiaTriKM'] == 0) {
                        $status = "product-item__sale-off--none";
                        $km = "no";
                        $makm = "";
                    }
                    else {
                        $status = "";
                        $makm = "&km=" .$data_sanpham1[$i]['GiaTriKM'];
                    }
                    ?>
                     <div class="col-product__item sale-home <?= $status?>">
                        <form action="" >
                            <div>
                            <div class="product-item__sale-off <?= $status?>">
                                <span class="home-product-item__percent"><?php echo $data_sanpham1[$i]['GiaTriKM'] ?>%</span>
                                <label class ="home-product-item__label" for="">Giảm</label>
                            </div>
                            <a href="">
                                <i data-heart="<?php echo $data_sanpham1[$i]['MaSP'] ?>"  class="icon-heart-element product-item-icon far fa-heart"></i>
                            </a>
                            </div>
                            <div class="product-img">
                                <a href="?act=detail&sp=<?=$data_sanpham1[$i]['MaSP']?><?= $makm ?>" style="display: block;">
                                    <span class ="img--hover"></span> 
                                    <img src="./public/images/<?php echo $data_sanpham1[$i]['hinhanh'] ?>" alt="">
                                </a>
                                <p class="text-sale">Sale</p>
                            </div>
                            <div class="product-fruits__infos">
                                <h2 class="tilte-name-product-t"><?= $data_sanpham1[$i]['TenSP']?></h2>
                                <div>
                                <span class="price-new"><?= number_format( $data_sanpham1[$i]['DonGia']) ?>đ</span>
                                <a href="?act=cart&xuli=add&id=<?=$data_sanpham1[$i]['MaSP']?>" class="button-add-product button-add-product btn-add-cart button-add-product--view">Cho vào giỏ</a>
                                <span class="price-old"><?php echo number_format($data_sanpham1[$i]['giaCu']) ?>đ</span>

                                </div>
                            </div>
                        </form>
                    </div>
            <?php }?>
        </div>
    </div>
</section>
<section id="product-dry">
    <div class="container">
        <div class="populator__head">
            <div>
                <h2 class="populator__head-title">
                    <a href="?act=product&cate=3&page=1">Gian hàng đồ khô</a>
                </h2>
                <p class="populator__head-desc">Sản phẩm từ đồ khô chất lượng cao</p>
            </div>
            <a href="?act=product&cate=3&page=1" class="populator__head-all">
                <p>Xem tất cả</p>
                <i class="fas fa-long-arrow-alt-right"></i>
            </a>
        </div>
        <div class="owl-carousel owl-theme" id="owl-slider-dry">
        <?php 
                for ($i = 0; $i < (count($data_sanpham2)); $i++) {
                    if ($data_sanpham2[$i]['GiaTriKM'] == 0) {
                        $status = "product-item__sale-off--none";
                        $km = "no";
                        $makm = "";
                    }
                    else {
                        $status = "";
                        $makm = "&km=" .$data_sanpham2[$i]['GiaTriKM'];
                    }
                    ?>
                     <div class="col-product__item sale-home <?= $status?>">
                        <form action="" >
                            <div>
                            <div class="product-item__sale-off <?= $status?>">
                                <span class="home-product-item__percent"><?php echo $data_sanpham2[$i]['GiaTriKM'] ?>%</span>
                                <label class ="home-product-item__label" for="">Giảm</label>
                            </div>
                            <a href="">
                                <i data-heart="<?php echo $data_sanpham2[$i]['MaSP'] ?>"  class="icon-heart-element product-item-icon far fa-heart"></i>
                            </a>
                            </div>
                            <div class="product-img">
                                <a href="?act=detail&sp=<?=$data_sanpham2[$i]['MaSP']?><?= $makm ?>" style="display: block;">
                                    <span class ="img--hover"></span> 
                                    <img src="./public/images/<?php echo $data_sanpham2[$i]['hinhanh'] ?>" alt="">
                                </a>
                                <p class="text-sale">Sale</p>
                            </div>
                            <div class="product-fruits__infos">
                                <h2 class="tilte-name-product-t"><?= $data_sanpham2[$i]['TenSP']?></h2>
                                <div>
                                <span class="price-new"><?= number_format( $data_sanpham2[$i]['DonGia']) ?>đ</span>
                                <a href="?act=cart&xuli=add&id=<?=$data_sanpham2[$i]['MaSP']?>" class="button-add-product button-add-product btn-add-cart button-add-product--view">Cho vào giỏ</a>
                                <span class="price-old"><?php echo number_format($data_sanpham2[$i]['giaCu']) ?>đ</span>

                                </div>
                            </div>
                        </form>
                    </div>
            <?php }?>
        </div>
    </div>
</section>
<section id="product-cate">
    <div class="container">
        <div class="populator__head">
            <div>
                <h2 class="populator__head-title">
                    <a href="?act=product&cate=3&page=1">Gian hàng bánh kẹo</a>
                </h2>
                <p class="populator__head-desc">Sản phẩm từ bánh chất lượng cao</p>
            </div>
            <a href="?act=product&cate=2&page=1" class="populator__head-all">
                <p>Xem tất cả</p>
                <i class="fas fa-long-arrow-alt-right"></i>
            </a>
        </div>
        <div class="owl-carousel owl-theme" id="owl-slider-cate">
        <?php 
                for ($i = 0; $i < (count($data_sanpham3)); $i++) {
                    if ($data_sanpham3[$i]['GiaTriKM'] == 0) {
                        $status = "product-item__sale-off--none";
                        $km = "no";
                        $makm = "";
                    }
                    else {
                        $status = "";
                        $makm = "&km=" .$data_sanpham3[$i]['GiaTriKM'];
                    }
                    ?>
                     <div class="col-product__item sale-home <?= $status?>">
                        <form action="" >
                            <div>
                            <div class="product-item__sale-off <?= $status?>">
                                <span class="home-product-item__percent"><?php echo $data_sanpham3[$i]['GiaTriKM'] ?>%</span>
                                <label class ="home-product-item__label" for="">Giảm</label>
                            </div>
                            <a href="">
                                <i data-heart="<?php echo $data_sanpham3[$i]['MaSP'] ?>"  class="icon-heart-element product-item-icon far fa-heart"></i>
                            </a>
                            </div>
                            <div class="product-img">
                                <a href="?act=detail&sp=<?=$data_sanpham3[$i]['MaSP']?><?= $makm ?>" style="display: block;">
                                    <span class ="img--hover"></span> 
                                    <img src="./public/images/<?php echo $data_sanpham3[$i]['hinhanh'] ?>" alt="">
                                </a>
                                <p class="text-sale">Sale</p>
                            </div>
                            <div class="product-fruits__infos">
                                <h2 class="tilte-name-product-t"><?= $data_sanpham3[$i]['TenSP']?></h2>
                                <div>
                                <span class="price-new"><?= number_format( $data_sanpham3[$i]['DonGia']) ?>đ</span>
                                <a href="?act=cart&xuli=add&id=<?=$data_sanpham3[$i]['MaSP']?>" class="button-add-product button-add-product btn-add-cart button-add-product--view">Cho vào giỏ</a>
                                <span class="price-old"><?php echo number_format($data_sanpham3[$i]['giaCu']) ?>đ</span>

                                </div>
                            </div>
                        </form>
                    </div>
            <?php }?>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-lg-6 col-md-6 mb-4">
                <div class="populator__head mb-4">
                    <div>
                        <h2 class="populator__head-title">
                            <a href="">Mẹo hữu ích</a>
                        </h2>
                        <p class="populator__head-desc">Video hữu ích nhất cho các bà nội trợ</p>
                    </div>
                </div>
                <div class="news-blog-list">
                    <div class="news-blog__base">
                        <a href="?act=news&chitiet=chitiettin&ma=<?= $data_tinTucNoiBat[0]['idTinTuc']?>" class="news-blog__base-link">
                            <feature class="news-blog__base-feature">
                                <img src="<?= $data_tinTucNoiBat[0]['hinhanh']?>" alt="">
                            </feature>
                            <h2 class="news-blog__base-title text-hover">
                                <?= $data_tinTucNoiBat[0]['TieuDe']?>
                            </h2>
                        </a>
                        <p class="news-blog__base-desc">
                        <?= $data_tinTucNoiBat[0]['trichdan']?>
                        </p>
                    </div>
                    <div class="news-blog-list__new">
                        <ul>
                            <?php for($i =1 ; $i < count($data_tinTucNoiBat);$i++) { ?>
                                <li>
                                    <a href="?act=news&chitiet=chitiettin&ma=<?= $data_tinTucNoiBat[$i]['idTinTuc']?>" class="text-hover">
                                        <?= $data_tinTucNoiBat[$i]['TieuDe']?>
                                    </a>
                                </li> 
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-6 col-md-6">
                <div class="populator__head mb-4">
                    <div>
                        <h2 class="populator__head-title">
                            <a href="" class="text-hover">Tin tức cập nhật</a>
                        </h2>
                        <p class="populator__head-desc">
                            Vòng quanh phố phường xem tin mới nhất
                        </p>
                    </div>
                    <div>
                        <a href="?act=news&page=1" class="populator__head-all">
                            <p>Xem tất cả</p>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-list-box">
                    <div class="news-blog-video">
                        <?php 
                           foreach ($data_tinTucNoiBat as $item) { ?>
                            <div class="news-blog-video__post">
                                <a href="?act=news&chitiet=chitiettin&ma=<?= $item['idTinTuc']?>" class="news-blog-video__thumb">
                                    <img src="<?= $item['hinhanh']?>" alt="">
                                </a>
                                <div class="news-blog-video__cont">
                                    <a href="" class="blog__title text-hover">
                                        <?= $item['TieuDe']?>
                                    </a>
                                    <p class="news-blog__base-desc">
                                    <?= $item['trichdan']?>
                                    </p>
                                </div>
                            </div>
                          <?php }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="./public/js/countdown.js"></script>