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
                    <span>Sản phẩm</span>
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
                        <span>
                            <?php 
                            if($data_count_product[0]['soLuong'] == 0)
                                echo '0';
                            else 
                                echo $data_count_product[0]['soLuong'];
                            ?>
                        </span>
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
                    <span style="padding-left: 12px;" class="count-product-item"><?= $data_sanpham[0]['SoLuong']?> sản phẩm có sẵn</span>
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
            <div class="delivery-method">
                    <p>Các hình thức giao hàng</p>
                    <p class="free-ship">
                        <img src="https://www.pharmacity.vn/icons/star-green.svg" alt="">
                        <span>Freeship cho đơn hàng từ 300k</span>
                    </p>
                </div>
                <div>
                    <img src="https://giamgiatructuyen.com/wp-content/uploads/2019/10/meo-mua-hang-mien-phi-ship-shopee-5.jpg" alt="" width="100%">
                </div>
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
                            $makm = "&km=" .$row['GiaTriKM'];
                        }?>
                        <div class="col col-lg-3 col-md-3 col-12 col-sm-6">
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
        <div class="col col-lg-9">
            <div class="product_getcontent">
                <div class="product-tab-title">
                    <span>Thông tin sản phẩm</span>
                </div>
                <div class="product-short__desc">
                    <?= $data_sanpham[0]['desc']?>
                </div>
                <ul class="infor-product__detail">
                    <li>
                        <span>Loại</span>
                        <div><?= $data_sanpham[0]['TenLSP']?></div>
                    </li>
                    <li>
                        <span>Khối lượng</span>
                        <div><?= $data_sanpham[0]['KhoiLuong']?></div>
                    </li>
                    <li>
                        <span>Thành phần</span>
                        <div><?= $data_sanpham[0]['ThanhPhan']?></div>
                    </li>
                    <li>
                        <span>Hạn sử dụng đến</span>
                        <div><?= $data_sanpham[0]['Hansd']?></div>
                    </li>
                    <li>
                        <span>Nơi xuất xứ</span>
                        <div><?= $data_sanpham[0]['XuatXu']?></div>
                    </li>
                </ul>
            </div>
            <div class="row-md-5 md-5">
                <div class="box-rating">
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
                                $num1 == 0 ? $widthNum1 = 0 : $widthNum1=ceil($num1/$countrating*100);
                                $num2 == 0 ? $widthNum2 = 0 : $widthNum2=ceil($num2/$countrating*100);
                                $num3 == 0 ? $widthNum3 = 0 : $widthNum3=ceil($num3/$countrating*100);
                                $num4 == 0 ? $widthNum4 = 0 : $widthNum4=ceil($num4/$countrating*100);
                                $num5 == 0 ? $widthNum5 = 0 : $widthNum5=ceil($num5/$countrating*100);
                                
                            ?>
                                <li>
                                    <span>5 <i class="fas fa-star"></i></span>
                                    <div class="rating-bar">
                                        <div class="rating-bar__default" style="background: var(--cl-green);width:<?= $widthNum5 ?>%;"></div>
                                    </div>
                                    <span><?=  $num5 ?> đánh giá</span>
                                </li>
                                <li>
                                    <span>4 <i class="fas fa-star"></i></span>
                                    <div class="rating-bar">
                                        <div class="rating-bar__default" style="background: var(--cl-green);width:<?= $widthNum4 ?>%;"></div>
                                    </div>
                                    <span><?=  $num4 ?> đánh giá</span>
                                </li>
                                <li>
                                    <span>3 <i class="fas fa-star"></i></span>
                                    <div class="rating-bar">
                                        <div class="rating-bar__default"style="background: var(--cl-green);width:<?= $widthNum3 ?>%;"></div>
                                    </div>
                                    <span><?=  $num3 ?>  đánh giá</span>
                                </li>
                                <li>
                                    <span>2 <i class="fas fa-star"></i></span>
                                    <div class="rating-bar">
                                        <div class="rating-bar__default" style="background: var(--cl-green);width:<?= $widthNum2 ?>%;"></div>
                                    </div>
                                    <span><?=  $num2 ?>  đánh giá</span>
                                </li>
                                <li>
                                    <span>1 <i class="fas fa-star"></i></span>
                                    <div class="rating-bar">
                                        <div class="rating-bar__default" style="background: var(--cl-green);width:<?= $widthNum1 ?>%;"></div>
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
                                    <div class="comment-image">
                                        <?php if($row['hinhanh']!='') {?>
                                        <img width="80" height="50" src="./public/images/comments/<?= $row['hinhanh']?>" alt="">
                                        <?php }?>
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
                                    </div>
                            <?php   }
                                ?>
                    </div>
                </div>

            <!-- Đánh giá -->

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
        </div>

        <!-- Sản phẩm bán chạy -->
        <div class="col col-lg-3">
            <div class="group-type-product">
                <h2>Sản phẩm bán chạy</h2>
                <div class="selling-products">
                    <?php
                        for($i=0;$i< count($data_arr_topsp); $i++) {
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
                                    <h2 class="tilte-name-product-t"><?= $data_arr_topsp[$i][0]['TenSP']?></h2>
                                    <div>
                                    <span class="price-new"><?= number_format( $data_arr_topsp[$i][0]['DonGia']) ?>đ</span>
                                    <a href="?act=cart&xuli=add&id=<?=$data_arr_topsp[$i][0]['MaSP']?>" class="button-add-product button-add-product btn-add-cart button-add-product--view">Cho vào giỏ</a>
                                    <span class="price-old"><?php echo number_format($data_arr_topsp[$i][0]['DonGia']+ 20000) ?>đ</span>
    
                                    </div>
                                </div>
                            </form>
                        </div>

                        <?php }
                    ?>
                </div>
            </div>
        </div>
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