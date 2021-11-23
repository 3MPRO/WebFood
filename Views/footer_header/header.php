<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col col-md-4 col-ms-6">
                <a href="?act=home" class="header__logo">
                    <img src="./public/images/logo.webp" alt="">
                </a>
            </div>
            <div class="col-lg-8 col col-md-4 col-ms-6">
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
            <div class="col-lg-2 col col-md-4 col-ms-12">
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
                                    <span class="cart-icon__count">0</span>
                                </a>
                                <div class="cart-down">
                                    <!-- <div class="cart-down-empty">
                                        <img src="./public/images/empy-icon.PNG" alt="">
                                        <p>Không có sản phẩm nào trong giỏ hàng của bạn</p>
                                    </div> -->
                                    <div class="cart-content">
                                        <form action="">
                                            <div class="cart-content-inner__item">
                                                <div class="cart-content-inner__item-row">
                                                    <a href="" class="cart-content-inner__item-link">
                                                        <img src="./public/images/pro20-grande.webp" alt="">
                                                    </a>
                                                    <div class="cart-content-inner__info">
                                                        <a href="">
                                                            Chuối Tiêu Quê Loại To
                                                        </a>
                                                        <div class="cart-content-inner__info-box">
                                                            <div class="cart-content-inner__qty">
                                                                <label for="">Số lượng</label>
                                                                <div class="group-btn-qty">
                                                                    <a class="btn-qty-minus">
                                                                        <i class="fas fa-minus"></i>
                                                                    </a>
                                                                    <input type="text" class="cart-input" value="1">
                                                                    <a class="btn-qty-plus">
                                                                        <i class="fas fa-plus"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart-content-inner__prices">
                                                                <p class="cart-price">60.000đ</p>
                                                                <a href="" class="btn-remove-cart">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart-content-inner__footer">
                                                    <div class="cart-content-inner__subtotal">
                                                        <p>Tổng tiền</p>
                                                        <p class="text-total">60.000đ</p>
                                                    </div>
                                                    <div class="cart-content-inner__checkout">
                                                        <button class="cart-content-inner__checkout-btn">Thanh toán</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="user">
                                        <!-- Ví dụ id user = 1 / đợi Huy đăng nhập sửa sau ::@@ -->
                                        <a href="?act=user&iduser=1">
                                            <i class="fas fa-user"></i>
                                        </a>
                                        <div class="group-login">
                                        <ul class="group-login__list">
                                            <?php
                                            if(isset($_SESSION['login'])){
                                            ?>
                                                <li class="group-login__list-item"><b>Chào <?=$_SESSION['login']['Ho']?> <?=$_SESSION['login']['Ten']?></b></li>
                                                <li><a href="?act=taikhoan&xuli=account">Tài khoản</a></li>
                                                <li><a href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                                                <?php
                                                if(isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){ ?>
                                                <li><a href="admin/?mod=login">Trang quản lý</a></li>
                                                <?php }}else{ ?>
                                                <li class="group-login__list-item"><b>Khách hàng</b></li>
                                                <li class="group-login__list-item">
                                                    <a href="?act=taikhoan">Đăng nhập</a>
                                                </li>
                                                <?php } ?>
                                                <li class="group-login__list-item">
                                                    <a href="">Đăng ký</a>
                                                </li>
                                    </ul>
                                        </div>

                                        </form>

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

<nav id="nav">
    <div class="container">
        <ul class="nav-list">
            <li class="nav-list__item active"><a href="?act=home">Trang chủ</a></li>
            <li class="nav-list__item">
                <a href="">
                    Sản phẩm
                </a>
                <i class="fas fa-chevron-down"></i>
                <ul class="nav-item__down">
                    <?php foreach($data_danhmuc as $row) { ?>

                            <li class="nav-item__down-item"><a href="?act=product&cate=<?=$row['MaDM'] ?>"><?=$row['TenDM']?></a></li>

                            <?php  } ?>
                    
                    
                </ul>
            </li>
            <li class="nav-list__item"><a href="?act=product&cate=2">Bánh kẹo</a></li>
            <li class="nav-list__item"><a href="?act=product&cate=3">Đồ khô, gạo</a></li>
            <li class="nav-list__item"><a href="?act=">Liên hệ</a></li>
            <li class="nav-list__item"><a href="?act=">Tin tức</a></li>
        </ul>
    </div>
</nav>