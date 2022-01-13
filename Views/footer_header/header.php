<div class="model-add-cart">
    <span>Tuyệt vời</span>
    <p>Bạn đã thêm sản phẩm vào giỏ hàng thành công bấm
        <a href="">Vào đây</a>
        để đi tới giỏ hàng
    </p>
</div>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col col-md-4 col-ms-6 col-xs-12 col-logo__header">
                <a href="?act=home" class="header__logo">
                    <img src="./public/images/logo.webp" alt="">
                </a>
            </div>
            <div class="col-lg-8 col col-md-4 col-sm-12">
                <div class="search-box">
                    <div class="header__search">
                        <form action="?act=search" class="search-box-action" method="GET">
                            <input type="hidden" name="act" value="search">
                            <span class="input-group">
                                <button class="search-submit" type="submit" name="">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/search--v1.png"/>
                                </button>
                            </span>
                            <input type="text" placeholder="Tìm kiếm sản phẩm..." class="search-text-product" name="keyword" autocomplete="off">
                        </form>
                        <input type="hidden" name="action" value="tim-kiem">
                        <div class="result__box">
                            <div class="search-results">
                                
                            </div>
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
            <div class="col-lg-2 col col-md-4 col-sm-6 col-none">
                <div class="group__account">
                    <ul class="group__account-list">
                        <li>
                            <div class="heart__icon">
                                <a href="?act=favorite">
                                    <i class="far fa-heart"></i>
                                    <span class="heart-icon__count">0</span>
                                </a>
                            </div>
                            
                        </li>
                        <li>
                            <div class="cart-icon">
                                <?php 
                                    $soluong = 0;
                                    $thanhtien = 0;
                                    $countProduct = 0;
                                    if(isset($_SESSION['product'])){
                                    foreach ($_SESSION['product'] as $value) {
                                        $countProduct++;
                                        $soluong +=1;
                                        $thanhtien +=$value['ThanhTien'];
                                    }}
                                ?>
                                <a href="?act=cart">
                                    <i class="fas fa-cart-arrow-down"></i>
                                    <span class="cart-icon__count"><?php echo $countProduct ?></span>
                                </a>
                                <div class="cart-down">
                                    <div class="cart-content">
                                        <div class="cart-wrapper-content <?php  if(!isset($_SESSION['product']) || count($_SESSION['product'])===0) echo 'hiddent'?>">
                                            <?php if(isset($_SESSION['product']) && count($_SESSION['product']) > 0){
                                            foreach ($_SESSION['product'] as $value) { 
                                                // print_r($value);
                                                ?>
                                            <form action="" id="frm">
                                                <div class="cart-content-inner__item">
                                                    <div class="cart-content-inner__item-row">
                                                        <a href="" class="cart-content-inner__item-link">
                                                            <img src="./public/images/<?php echo $value['hinhanh']?>" alt="">
                                                        </a>
                                                        <div class="cart-content-inner__info">
                                                            <a href="">
                                                                <?php echo $value['TenSP'] ?>
                                                            </a>
                                                            <div class="cart-content-inner__info-box">
                                                                <div class="cart-content-inner__qty">
                                                                    <label for="">Số Lượng</label>
                                                                    <div class="group-btn-qty">
                                                                        <a class="btn-qty-minus <?php if($value['soluong'] <=1) echo 'enable-minus';?>" onclick="minusCart(<?php echo $value['MaSP']?>, <?php echo $value['DonGia']?>)">
                                                                            <i class="fas fa-minus"></i>
                                                                        </a>
                                                                        <input type="hidden" name="ma-sp" value="<?php echo $value['MaSP']?>">
                                                                        <input type="text" name="cart-input-<?php echo $value['MaSP']?>" class="cart-input" value="<?php echo $value['soluong'] ?>">
                                                                        <a class="btn-qty-plus" onclick="plusCart(<?php echo $value['MaSP']?>, <?php echo $value['DonGia']?>)">
                                                                            <i class="fas fa-plus"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="cart-content-inner__prices">
                                                                    <p class="cart-price"><?php echo number_format($value['DonGia'])?> đ</p>
                                                                    <a href="?act=cart&xuli=delete-cart&id=<?=$value['MaSP']?>" class="btn-remove-cart">Xóa</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <?php } ?>
                                        </div>
                                                
                                    </div>
                                            <div class="cart-content-inner__footer">
                                                <div class="cart-content-inner__subtotal">
                                                    <p>Tổng tiền</p>
                                                    <div style="display: flex;color: red;font-weight: 800;">
                                                        <p class="text-total"><?=number_format($thanhtien)?></p>
                                                        <p>đ</p>
                                                    </div>
                                                </div>
                                                <div class="cart-content-inner__checkout">
                                                    <a href="<?php 
                                                        if(isset($_SESSION['login'])) {
                                                            echo '?act=pay';
                                                        } else {
                                                            echo '?act=taikhoan';
                                                        }?>" class="cart-content-inner__btn btn-checkout">Thanh toán</a >
                                                </div>
                                                <div class="cart-content-inner__checkout">
                                                    <a href="?act=cart"class="cart-content-inner__btn btn-show">Xem giỏ hàng</a>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <?php
                                                if(!isset($_SESSION['product']) || count($_SESSION['product'])===0) {?>
                                                <div class="cart-down-empty">
                                                    <img src="./public/images/empy-icon.PNG" alt="">
                                                    <p>Không có sản phẩm nào trong giỏ hàng của bạn</p>
                                                </div>
                                            <?php } ?>
                                </li>
                                <li>
                                    <div class="user">
                                        <!-- Ví dụ id user = 1 / đợi Huy đăng nhập sửa sau ::@@ -->
                                        <a href="">
                                            <i class="fas fa-user"></i>
                                        </a>
                                        <div class="group-login">
                                        <ul class="group-login__list">
                                            <?php
                                            if(isset($_SESSION['login'])){
                                            ?>
                                                <li class="group-login__list-item"><b>Chào <?=$_SESSION['login']['Ten']?></b></li>
                                                <li class="group-login__list-item"><a href="?act=taikhoan&xuli=account">Tài khoản</a></li>
                                                <li class="group-login__list-item"><a href="?act=orderMy">Đơn hàng của tôi</a></li>  
                                                <li class="group-login__list-item"><a href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                                                <?php
                                                if(isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien']) || isset($_SESSION['isLogin_GiaoHang'])){ ?>
                                                <li class="group-login__list-item"><a href="admin/?mod=login">Trang quản lý</a></li>
                                                <?php }}else{ ?>
                                                <li class="group-login__list-item"><b>Khách hàng</b></li>
                                                <li class="group-login__list-item">
                                                    <a href="?act=taikhoan&xuli=login">Đăng nhập</a>
                                                </li>
                                                <?php } ?>
                                                
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="header-nav-mobile">
    <div class="header-nav-mobile__main">
        <ul>
            <li><a href="">Trang chủ</a></li>
            <li>
                <a href="" style="padding-right:12px;">
                    Sản phẩm
                </a>
                <i class="fas fa-chevron-down" id="icon-down-mobile"></i>
                <ul class="nav-item__down-mobile">
                    <?php foreach($data_danhmuc as $row) { ?>
                            <li class="nav-item__down-item-mobile">
                                <a href="?act=product&cate=<?=$row['MaDM'] ?>" >
                                    <?=$row['TenDM']?>
                                </a>
                                <i class="fas fa-chevron-down" style=""></i>
                                <?php recursiveMenuMobile($data_loaisp,$row['MaDM']) ?>
                            </li>
                            <?php  } ?>
                </ul>
            </li>
            <li><a href="">Bánh kẹo</a></li>
            <li><a href="">Đồ khô, gạo</a></li>
            <li><a href="">Liên hệ</a></li>
            <li><a href="">Tin tức</a></li>
        </ul>
    </div>
</div>

<nav id="nav">
    <div class="container">
        <ul class="nav-list">
            <li class="nav-list__item">
                <a href="?act=home" class="nav-list__item-link">Trang chủ</a>
            </li>
            <li class="nav-list__item">
                <a href="">
                    Sản phẩm
                </a>
                <i class="fas fa-chevron-down"></i>
                <ul class="nav-item__down">
                    <?php foreach($data_danhmuc as $row) { ?>
                            <li class="nav-item__down-item">
                                <a href="?act=product&cate=<?=$row['MaDM']?>&page=1">
                                    <?=$row['TenDM']?>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                                <?php recursiveMenu($data_loaisp,$row['MaDM']) ?>
                            </li>
                            <?php  } ?>
                </ul>
            </li>
            <li class="nav-list__item"><a class="nav-list__item-link" href="?act=product&cate=2&page=1">Bánh kẹo</a></li>
            <li class="nav-list__item"><a class="nav-list__item-link" href="?act=product&cate=3&page=1">Đồ khô, gạo</a></li>
            <li class="nav-list__item"><a class="nav-list__item-link" href="?act=contact">Liên hệ</a></li>
            <li class="nav-list__item"><a class="nav-list__item-link" href="?act=news&page=1">Tin tức</a></li>
        </ul>
    </div>
</nav>

<div class="overlay-nav-mobile">
    
</div>
<?php

function recursiveMenu($data, $parent_id, $sub=true){
    echo '<ul class="nav-list__down">';
    foreach ($data as $key => $item) {
         if($item['MaDM'] == $parent_id){
            unset($data[$key]);
          ?>    
     <li>
      <a href="?act=product&cate=<?=$item['MaDM']?>&loai=<?=$item['MaLSP']?>&page=1">
          <?php echo $item['TenLSP']?>
      </a>
     </li>
        <?php }} 
     echo "</ul>";
}
function recursiveMenuMobile($data, $parent_id, $sub=true){
    echo '<ul class="nav-list__down-mobile">';
    foreach ($data as $key => $item) {
         if($item['MaDM'] == $parent_id){
            unset($data[$key]);
          ?>    
     <li>
      <a href="?act=product&cate=<?=$item['MaDM']?>&loai=<?=$item['MaLSP']?>&page=1">
          <?php echo $item['TenLSP']?>
      </a>
     </li>
        <?php }} 
     echo "</ul>";
}