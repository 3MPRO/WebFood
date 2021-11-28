<section id="slider">
    <div class="container">
        <ul class="slider-list">
            <li class="slider-list__item">
                <a href="">
                    <img src="./public/images/slider_1.webp" alt="">
                </a>
            </li>
            <li class="slider-list__item">
                <a href="">
                    <img src="./public/images/slider_2.webp" alt="">
                </a>
            </li>
        </ul>
    </div>
</section>
<section id="category">
    <div class="container">
        <h2 class="category-title">Danh mục nổi bật</h2>
        <div class="category-list">
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon1.webp" alt="">
                </a>
                <h3 class="category-item__name">Đồ khô, gạo</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon2.webp" alt="">
                </a>
                <h3 class="category-item__name">Gia vị, dầu ăn</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon3.png" alt="">
                </a>
                <h3 class="category-item__name">Bánh kẹo</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon4.png" alt="">
                </a>
                <h3 class="category-item__name">Mì, cháo, phở</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon5.png" alt="">
                </a>
                <h3 class="category-item__name">Nước giải khát</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon6.png" alt="">
                </a>
                <h3 class="category-item__name">Mì, cháo, phở</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon7.png" alt="">
                </a>
                <h3 class="category-item__name">Nước giải khát</h3>
            </div>
            <div class="category-list__item">
                <a href="" class="category-list__item-link">
                    <img src="./public/images/icon8.png" alt="">
                </a>
                <h3 class="category-item__name">Nước giải khát</h3>
            </div>
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
            <a href="" class="populator__head-all">
                <p>Xem tất cả</p>
                <i class="fas fa-long-arrow-alt-right"></i>
            </a>
        </div>
        <div class="row">
            <div class="col-lg-8 col">
                <div class="row">
                    <?php 
                        foreach ($data_random as $item) {?>
                            <div class="col col-lg-6">
                                <div class="item_product_main">
                                    <div class="populator__product">
                                        <a href="" class="populator__product-link">
                                            <img src="./public/images/<?= $item['hinhanh'];?>" alt="">
                                            <span><i class="far fa-heart"></i></span>
                                        </a>
                                    </div>
                                    <div class="populator__product-content">
                                        <h2 class="poplator__product-content-title tilte-name-product">
                                            <?= $item['TenSP'] ?>
                                        </h2>
                                        <p>Chuối tiêu xanh tại Dũng</p>
                                        <div class="price-box">
                                            <span class="price-text"><?= number_format($item['DonGia']) ?> đ</span>
                                            <a href="?act=cart&xuli=add&id=<?=$item['MaSP']?>"class="button-add-product btn-add-cart">Cho vào giỏ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col col-6">
                        <div class="populator__product-right">
                            <a href="" class="populator__product-right-link">
                                <img src="./public/images/<?= $data_random1[0]['hinhanh'] ?>" alt="">
                                <h2 class="tilte-name-product">
                                    <?= $data_random1[0]['TenSP'] ?>
                                </h2>
                            </a>
                            <div class="product__price-box">
                                <p class="price-new"><?= number_format($data_random1[0]['giaCu']) ?> đ</p>
                                <p class="price-old"><?= number_format($data_random1[0]['DonGia']) ?> đ</p>
                                <a href="?act=cart&xuli=add&id=<?=$data_random1[0]['MaSP']?>"class="button-add-product btn-add-cart">Cho vào giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-6">
                        <div class="row">
                            <div class="col col-12">
                                <div class="item_product_main">
                                    <div class="populator__product">
                                        <a href="" class="populator__product-link">
                                            <img src="./public/images/<?= $data_random2[0]['hinhanh'] ?>" alt="">
                                            <span><i class="far fa-heart"></i></span>
                                        </a>
                                    </div>
                                    <div class="populator__product-content">
                                        <h2 class="poplator__product-content-title tilte-name-product">
                                            <?= $data_random2[0]['TenSP'] ?>
                                        </h2>
                                        <p>Chuối tiêu xanh tại Dũng</p>
                                        <div class="price-box">
                                            <span class="price-text"><?= number_format($data_random2[0]['DonGia']) ?> đ</span>
                                            <a href="?act=cart&xuli=add&id=<?=$data_random2[0]['MaSP']?>"class="button-add-product btn-add-cart">Cho vào giỏ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-12">
                            <div class="item_product_main">
                                <div class="populator__product">
                                    <a href="" class="populator__product-link">
                                        <img src="./public/images/<?= $data_random3[0]['hinhanh'] ?>" alt="">
                                        <span><i class="far fa-heart"></i></span>
                                    </a>
                                </div>
                                <div class="populator__product-content">
                                    <h2 class="poplator__product-content-title tilte-name-product">
                                        <?= $data_random3[0]['TenSP'] ?>
                                    </h2>
                                    <p>Chuối tiêu xanh tại Dũng</p>
                                    <div class="price-box">
                                        <span class="price-text"><?= number_format($data_random3[0]['DonGia']) ?> đ</span>
                                        <a href="?act=cart&xuli=add&id=<?=$data_random3[0]['MaSP']?>"class="button-add-product btn-add-cart">Cho vào giỏ</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col">
                <div class="populator__product-right ">
                    <a href="" class="populator__product-right-link">
                        <img src="./public/images/<?= $data_random4[0]['hinhanh'] ?>" alt="">
                        <h2 class="tilte-name-product">
                            <?= $data_random4[0]['TenSP'] ?>
                        </h2>
                    </a>
                    <div class="product__price-box">
                        <p class="price-new"><?= number_format($data_random4[0]['giaCu']) ?> đ</p>
                        <p class="price-old"><?= number_format($data_random4[0]['DonGia']) ?> đ</p>
                        <a href="?act=cart&xuli=add&id=<?=$data_random4[0]['MaSP']?>"class="button-add-product btn-add-cart">Cho vào giỏ</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12">
                        <div class="item_product_main">
                            <div class="populator__product">
                                <a href="" class="populator__product-link">
                                    <img src="./public/images/<?= $data_random5[0]['hinhanh'] ?>" alt="">
                                    <span><i class="far fa-heart"></i></span>
                                </a>
                            </div>
                            <div class="populator__product-content">
                                <h2 class="poplator__product-content-title tilte-name-product">
                                <?= $data_random5[0]['TenSP'] ?>
                                </h2>
                                <p>Chuối tiêu xanh tại Dũng</p>
                                <div class="price-box">
                                    <span class="price-text"><?= number_format($data_random5[0]['DonGia']) ?></span>
                                    <a href="?act=cart&xuli=add&id=<?=$data_random5[0]['MaSP']?>"class="button-add-product btn-add-cart">Cho vào giỏ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="product-fruits">
    <div class="container">
        <div class="populator__head">
            <div>
                <h2 class="populator__head-title">
                    <a href="">Gian hàng hoa quả</a>
                </h2>
                <p class="populator__head-desc">Sản phẩm tươi ngon mới nhất</p>
            </div>
            <a href="?act=product&cate=1" class="populator__head-all">
                <p>Xem tất cả</p>
                <i class="fas fa-long-arrow-alt-right"></i>
            </a>
        </div>
        <div class="owl-carousel owl-theme" id="owl-fruilt-slider">
            <?php 
                for ($i = 0; $i < (count($data_sanpham1)); $i++) {
                    ?>
                    <div class="product-main">
                        <form action="" method="post">
                            <div class="product-fruits__thumb">
                                <a href="?act=detail&sp=<?=$data_sanpham1[$i]['MaSP']?>">
                                    <img src="./public/images/<?=$data_sanpham1[$i]['hinhanh'] ?>" alt="Product Title">
                                </a>
                                <div class="icon-heart-product">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="product-fruits__infos">
                                <h2 class="tilte-name-product"><?= $data_sanpham1[$i]['TenSP'] ?></h2>
                                <span class="price-text"><?= number_format($data_sanpham1[$i]['DonGia']) ?> VNĐ</span>
                                <a  href="?act=cart&xuli=add&id=<?=$data_sanpham1[$i]['MaSP']?>"
                                    class="button-add-product btn-add-cart" 
                                    value="<?php echo $data_sanpham1[$i]['MaSP'] ?>"
                                    name="add-button"
                                >Cho vào giỏ</a>
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
                    <a href="">Gian hàng đồ khô</a>
                </h2>
                <p class="populator__head-desc">Sản phẩm từ đồ khô chất lượng cao</p>
            </div>
            <a href="" class="populator__head-all">
                <p>Xem tất cả</p>
                <i class="fas fa-long-arrow-alt-right"></i>
            </a>
        </div>
        <div class="owl-carousel owl-theme" id="owl-slider-dry">
        <?php 
            for ($i = 0; $i < (count($data_sanpham2)); $i++) {
                ?>
                <div class="product-main">
                    <form action="" method="post">
                        <div class="product-fruits__thumb">
                            <a href="?act=detail&sp=<?=$data_sanpham2[$i]['MaSP']?>">
                                <img src="./public/images/<?=$data_sanpham2[$i]['hinhanh'] ?>" alt="Product Title">
                            </a>
                            <div class="icon-heart-product">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="product-fruits__infos">
                            <h2 class="tilte-name-product"><?= $data_sanpham2[$i]['TenSP'] ?></h2>
                            <span class="price-text"><?= number_format($data_sanpham2[$i]['DonGia']) ?> VNĐ</span>
                            <a  href="?act=cart&xuli=add&id=<?=$data_sanpham2[$i]['MaSP']?>"
                                class="button-add-product btn-add-cart" 
                                value="<?php echo $data_sanpham2[$i]['MaSP'] ?>"
                                name="add-button"
                            >Cho vào giỏ</a>
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
            <div class="col col-6">
                <div class="populator__head">
                    <div>
                        <h2 class="populator__head-title">
                            <a href="">Mẹo hữu ích</a>
                        </h2>
                        <p class="populator__head-desc">Video hữu ích nhất cho các bà nội trợ</p>
                    </div>
                </div>
                <div class="news-blog-list">
                    <div class="news-blog__base">
                        <a href="" class="news-blog__base-link">
                            <feature class="news-blog__base-feature">
                                <img src="./public/images/news-base.jpg" alt="">
                            </feature>
                            <h2 class="news-blog__base-title text-hover">
                                Mẹo giúp chọn một số hoa quả nhập khẩu tươi ngon
                            </h2>
                        </a>
                        <p class="news-blog__base-desc">
                            Khi bạn mua những sản phẩm được sản xuất tại nhà máy, thường sẽ có thời hạn để bạn kiểm tra trước khi quyết định chi tiền để mua món sản phẩm đó. Nhưng trái cây lại là những món không có thời hạn sử dụng. Bạn có thể tham khảo những mẹo dưới đây để giúp bạn lựa chọn các loại hoa quả tươi nhất. 
                        </p>
                    </div>
                    <div class="news-blog-list__new">
                        <ul>
                            <li>
                                <a href="" class="text-hover">Làm Detox từ hoa quả tươi sẵn có trong những ngày lạnh</a>
                            </li>
                            <li>
                                <a href="" class="text-hover">Tổng hợp cách làm các loại nước ép và bánh mì từ quả thanh long</a>
                            </li>
                            <li>
                                <a href="" class="text-hover">Những loại trái cây tươi tốt cho hệ tiêu hóa</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col col-6">
                <div class="populator__head">
                    <div>
                        <h2 class="populator__head-title">
                            <a href="" class="text-hover">Tin tức cập nhật</a>
                        </h2>
                        <p class="populator__head-desc">
                            Vòng quanh phố phường xem tin mới nhất
                        </p>
                    </div>
                </div>
                <div class="blog-list-box">
                    <div class="news-blog-video">
                        <div class="news-blog-video__post">
                            <a href="" class="news-blog-video__thumb">
                                <img src="./public/images/news-base.jpg" alt="">
                            </a>
                            <div class="news-blog-video__cont">
                                <a href="" class="blog__title text-hover">
                                    Mẹo giúp chọn một số hoa quả nhập khẩu tươi ngon
                                </a>
                                <p class="news-blog__base-desc">
                                    Khi bạn mua những sản phẩm được sản xuất tại nhà máy, thường sẽ có thời hạn để bạn kiểm tra trước khi quyết định chi tiền để mua món sản phẩm đó. Nhưng trái cây lại là những món không có thời hạn sử dụng. Bạn có thể tham khảo những mẹo dưới đây để giúp bạn lựa chọn các loại hoa quả tươi nhất. 
                                </p>
                            </div>
                        </div>
                        <div class="news-blog-video__post">
                            <a href="" class="news-blog-video__thumb">
                                <img src="./public/images/news-base.jpg" alt="">
                            </a>
                            <div class="news-blog-video__cont">
                                <a href="" class="blog__title text-hover">
                                    Mẹo giúp chọn một số hoa quả nhập khẩu tươi ngon
                                </a>
                                <p class="news-blog__base-desc">
                                    Khi bạn mua những sản phẩm được sản xuất tại nhà máy, thường sẽ có thời hạn để bạn kiểm tra trước khi quyết định chi tiền để mua món sản phẩm đó. Nhưng trái cây lại là những món không có thời hạn sử dụng. Bạn có thể tham khảo những mẹo dưới đây để giúp bạn lựa chọn các loại hoa quả tươi nhất. 
                                </p>
                            </div>
                        </div>
                        <div class="news-blog-video__post">
                            <a href="" class="news-blog-video__thumb">
                                <img src="./public/images/news-base.jpg" alt="">
                            </a>
                            <div class="news-blog-video__cont">
                                <a href="" class="blog__title text-hover">
                                    Mẹo giúp chọn một số hoa quả nhập khẩu tươi ngon
                                </a>
                                <p class="news-blog__base-desc">
                                    Khi bạn mua những sản phẩm được sản xuất tại nhà máy, thường sẽ có thời hạn để bạn kiểm tra trước khi quyết định chi tiền để mua món sản phẩm đó. Nhưng trái cây lại là những món không có thời hạn sử dụng. Bạn có thể tham khảo những mẹo dưới đây để giúp bạn lựa chọn các loại hoa quả tươi nhất. 
                                </p>
                            </div>
                        </div>
                        <div class="news-blog-video__post">
                            <a href="" class="news-blog-video__thumb">
                                <img src="./public/images/news-base.jpg" alt="">
                            </a>
                            <div class="news-blog-video__cont">
                                <a href="" class="blog__title text-hover">
                                    Mẹo giúp chọn một số hoa quả nhập khẩu tươi ngon
                                </a>
                                <p class="news-blog__base-desc">
                                    Khi bạn mua những sản phẩm được sản xuất tại nhà máy, thường sẽ có thời hạn để bạn kiểm tra trước khi quyết định chi tiền để mua món sản phẩm đó. Nhưng trái cây lại là những món không có thời hạn sử dụng. Bạn có thể tham khảo những mẹo dưới đây để giúp bạn lựa chọn các loại hoa quả tươi nhất. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>