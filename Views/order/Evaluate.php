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
        if (isset($_GET['km'])) {
            $km = $_GET['km'];
            $status = true;
        } else {
            $status = false;
        }
        ?>
        <div class="row mb-4">
            <div class="col col-lg-5">
                <div class="product-detail-left">
                    <div id="product-detail-left__thumbnail" class="<?php if ($status == true) echo "product-detail-left__thumbnail--sale " ?>">
                        <img src="./public/images/<?php echo $data_sanpham[0]['hinhanh']; ?>" alt="" class="product-detail-left__image-main">
                    </div>
                    <div class="product-detail-left__list-thumb">
                        <ul>
                            <?php for ($i = 0; $i < count($data_sanpham); $i++) { ?>
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
                        <?php if ($status == true) { ?>
                            <span class="product-detail-price__old"><?php echo number_format($data_sanpham[0]['giaCu']); ?> đ</span>
                            <span class="product-detail-price__sale"><?= $km ?>%</span>
                        <?php } ?>
                    </div>
                </div>
                <form action="./Controllers/CartController.php" method="post">
                    <div class="custom-quantity">
                        <a class="btn-minus" href="?act=cart&xuli=delete&id=<?php echo $data_sanpham[0]['MaSP']; ?>">
                            <i class="fas fa-minus"></i>
                        </a>
                        <input type="text" class="qty-input" value="1" name="slsanpham">
                        <a class="btn-plus" href="?act=cart&xuli=update&id=<?php echo $data_sanpham[0]['MaSP']; ?>">
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


        <!-- Đánh giá -->
        <div class="row md-5">
            <div class="box-rating col col-lg-8">
                <div class="product-tab-title">
                    <span>Đánh giá sản phẩm</span>
                </div>
                <div class="Evalute-box">
                    <input type="hidden" name="" class="ratingResult">
                    <input type="hidden" name="" class="rMaND" value="<?= $_GET['nd'] ?> ">
                    <input type="hidden" name="" class="rMaSP" value="<?= $_GET['sp'] ?> ">
                    <input type="hidden" name="" class="rMaHD" value="<?= $_GET['hd'] ?> ">
                    <div class="list-action-rating">
                        <i class="star-active star-nomal fas fa-star"></i>
                        <i class="fas star-nomal fa-star"></i>
                        <i class="fas star-nomal fa-star"></i>
                        <i class="fas star-nomal fa-star"></i>
                        <i class="fas star-nomal fa-star"></i>
                    </div>

                    <div class="Enter-Evaluate">
                        <input class="ratingComment" placeholder="Nhập đánh giá : " type="text" name="" id="">
                    </div>
                    <div class="Enter-Evaluate">
                        <button href="" class="btn-rating">Đánh giá</button>
                    </div>
                </div>
            <div class="show-rating">

            
                <div class="rating-box">
                    <div class="lrb">
                        <div class="average-rating orange">
                            <div>
                                <b><?= $data_sanpham[0]['SoSao'] ?></b>
                            </div>
                            <div>
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <span> <?= $data_sanpham[0]['SoDanhGia'] ?> đánh giá</span>
                            </div>
                        </div>
                    </div>
                    <div class="rrb">
                        <ul class="list-star">
                            <?php
                            $numEvaluteTotal = 0;
                            $num5 = 0;
                            $num4 = 0;
                            $num3 = 0;
                            $num2 = 0;
                            $num1 = 0;
                            if (count($DataEvalute) > 0) {
                                foreach ($DataEvalute as $row) {
                                    $numEvaluteTotal += 1;
                                    switch ($row['SoSao']) {
                                        case 5:
                                            $num5 += 1;
                                            break;
                                        case 4:
                                            $num4 += 1;
                                            break;
                                        case 3:
                                            $num3 += 1;
                                            break;
                                        case 2:
                                            $num2 += 1;
                                            break;
                                        case 1:
                                            $num1 += 1;
                                            break;
                                    }
                                }
                            } ?>
                            <li>
                                <span>5 <i class="fas fa-star"></i></span>
                                <div class="rating-bar">
                                    <div class="rating-bar__default rating-bar__in"></div>
                                </div>
                                <span><?= $num5 ?> đánh giá</span>
                            </li>
                            <li>
                                <span>4 <i class="fas fa-star"></i></span>
                                <div class="rating-bar">
                                    <div class="rating-bar__default rating-bar__none"></div>
                                </div>
                                <span><?= $num4 ?> đánh giá</span>
                            </li>
                            <li>
                                <span>3 <i class="fas fa-star"></i></span>
                                <div class="rating-bar">
                                    <div class="rating-bar__default rating-bar__none"></div>
                                </div>
                                <span><?= $num3 ?> đánh giá</span>
                            </li>
                            <li>
                                <span>2 <i class="fas fa-star"></i></span>
                                <div class="rating-bar">
                                    <div class="rating-bar__default rating-bar__none"></div>
                                </div>
                                <span><?= $num2 ?> đánh giá</span>
                            </li>
                            <li>
                                <span>1 <i class="fas fa-star"></i></span>
                                <div class="rating-bar">
                                    <div class="rating-bar__default rating-bar__none"></div>
                                </div>
                                <span><?= $num1 ?> đánh giá</span>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="list-comment-product">

                    <?php
                    if (count($DataEvalute) > 0) {
                        foreach ($DataEvalute as $row) { ?>
                            <div class="list-comment-product__item">
                                <div class="cmt-heading">
                                    <span><?= $row['Ho'] . " " . $row['ten'] ?></span>
                                    <ul>
                                        <?php for ($i = 1; $i <= $row['SoSao']; $i++) { ?>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                    <span>
                                        <i class="fas fa-check"></i>
                                        Đã mua
                                    </span>
                                </div>
                                <div class="comment-text">
                                    <?= $row['BinhLuan'] ?>
                                </div>
                                <div class="comment-time">
                                    <i class="far fa-calendar-times"></i>

                                    <?= $row['ngay'] ?>
                                </div>
                            </div>

                        <?php }
                    } else { ?>
                        <div class="list-comment-product__item">
                            <div class="cmt-heading">
                                <span>Chưa có đánh giá nào</span>

                            </div>

                        <?php   }
                        ?>
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