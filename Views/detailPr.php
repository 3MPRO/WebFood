<?php
 $length = count($DataEvalute);
 $countrating = $length;
 $tbSao = 0;
 foreach($DataEvalute as $row){
    $tbSao += $row['SoSao']/$length;
 }
?>
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
                        <span><?= $tbSao ?></span>
                        <?php
                            for ($i = 1; $i <= floor($tbSao); $i++){ 
                            ?>
                                <li><i class="fas fa-star active"></i></li>
                            <?php } 
                            if($tbSao > floor($tbSao)) {
                                echo ' <li><i class="fas fa-star-half-alt active"></i></li>';
                                for ($i = 1; $i < (5-floor($tbSao)); $i++)
                                    echo '<li><i class="fas fa-star"></i></li>';
                            }
                            else {
                                for ($i = 1; $i <= (5-floor($tbSao)); $i++)
                                    echo '<li><i class="fas fa-star"></i></li>';
                            }
                        ?>
                    </ul>
                    <div class="count-vote">
                        <span><?= $countrating ?></span>
                        <div>Đánh giá</div>
                    </div>
                    <div class="count-producted">
                        <span><?= $data_count_product[0]['soLuong']?></span>
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
                    <span style="padding-left: 12px;"><?= $data_sanpham[0]['SoLuong']?> sản phẩm có sẵn</span>
                    <span style="padding-top: 14px;color: red; font-size:14px; display:none;" id="number-over">Số lượng vượt quá giới hạn</span>
                    <input type="text" hidden value="<?= $data_sanpham[0]['SoLuong']?>" id="so-luong-max">
                </div>
                <div class="group-button-add">
                    <?php
                        if($data_sanpham[0]['SoLuong'] <=1)
                            echo '<button class="btn btn-secondary" disabled > Tạm thời hết hàng </button>';
                        else {?>
                        <a href="?act=cart&xuli=add&id=<?php echo $data_sanpham[0]['MaSP']; ?>&sl=1" class="add-cart btn-add-cart" data-id="<?php echo $data_sanpham[0]['MaSP']; ?>">Cho vào giỏ hàng</a>
                    <?php } ?>
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
            <div class="product-tab-title" id="count-vote">
                <span>Đánh giá sản phẩm</span>
            </div>
            <div class="rating-box">
                <div class="lrb">
                    <div class="average-rating orange">
                        <div>
                            <span id="total-star"><?= $tbSao ?></span>
                        </div>
                        <div class="rating-total__img">
                            <div class="rating-overlay__img"></div>
                        </div>
                        <div>
                            <span> <?= $countrating ?> đánh giá</span>
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
                        if(count($DataEvalute)>0){
                            foreach($DataEvalute as $row){ 
                                $numEvaluteTotal += 1;
                                switch ($row['SoSao']){
                                    case 5 : 
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
                        }
                        
                    ?>
                        <li>
                            <span>5 <i class="fas fa-star"></i></span>
                            <div class="rating-bar">
                                <div class="rating-bar__default 
                                    <?php if($num5 == 0) {
                                        echo 'rating-bar__none';
                                        } else {
                                            echo 'rating-bar__in';
                                        }
                                    ?>
                                "></div>
                            </div>
                            <span><?=  $num5 ?> đánh giá</span>
                        </li>
                        <li>
                            <span>4 <i class="fas fa-star"></i></span>
                            <div class="rating-bar">
                                <div class="rating-bar__default
                                    <?php if($num4 == 0) {
                                        echo 'rating-bar__none';
                                        } else {
                                            echo 'rating-bar__in';
                                        }
                                    ?>
                                "></div>
                            </div>
                            <span><?=  $num4 ?> đánh giá</span>
                        </li>
                        <li>
                            <span>3 <i class="fas fa-star"></i></span>
                            <div class="rating-bar">
                                <div class="rating-bar__default
                                <?php if($num3 == 0) {
                                    echo 'rating-bar__none';
                                    } else {
                                        echo 'rating-bar__in';
                                    }
                                ?>
                                "></div>
                            </div>
                            <span><?=  $num3 ?>  đánh giá</span>
                        </li>
                        <li>
                            <span>2 <i class="fas fa-star"></i></span>
                            <div class="rating-bar">
                                <div class="rating-bar__default
                                    <?php if($num2 == 0) {
                                        echo 'rating-bar__none';
                                        } else {
                                            echo 'rating-bar__in';
                                        }
                                    ?>
                                "></div>
                            </div>
                            <span><?=  $num2 ?>  đánh giá</span>
                        </li>
                        <li>
                            <span>1 <i class="fas fa-star"></i></span>
                            <div class="rating-bar">
                                <div class="rating-bar__default
                                <?php if($num1 == 0) {
                                        echo 'rating-bar__none';
                                        } else {
                                            echo 'rating-bar__in';
                                        }
                                    ?>
                                "></div>
                            </div>
                            <span><?=  $num1 ?> đánh giá</span>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <div class="list-comment-product">

               <?php 
                 if(count($DataEvalute)>0){
                    foreach($DataEvalute as $row){?>
                        <div class="list-comment-product__item">
                            <div class="cmt-heading">
                                <span><?= $row['Ho'] . " ". $row['ten'] ?></span> 
                                <ul>
                                    <?php for($i =1 ;$i<= $row['SoSao'];$i++){?>
                                    <li>
                                        <i class="fas fa-star active"></i>
                                    </li>
                                    <?php }?>
                                    <?php
                                        if($row['SoSao'] < 5) {
                                            for ($i=1; $i <=(5-$row['SoSao']); $i++) { ?>
                                               <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                        <?php } }
                                    ?>
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

                        <?php }}
                        else{ ?>
                            <div class="list-comment-product__item">
                            <div class="cmt-heading">
                                <span style="width: 100%;">Chưa có đánh giá nào</span> 
                               
                            </div>
                            
                     <?php   }
                        ?>
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

<script>
    let totalStar = Number(document.getElementById('total-star').textContent)
    let overlayImg = document.querySelector('.rating-overlay__img')
    let leftPx = Math.ceil(((totalStar)/5)*120);
    console.log(leftPx);
    overlayImg.style.left = leftPx + 'px'
</script>