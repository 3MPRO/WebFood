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
                        <span id="danhmuc">Sản phẩm yêu thích</span>
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
                    </div>
                    <div class="col col-lg-9">
                        <?php echo $myJSON ?>
                    <script>
                        localStorage.setItem('dulieu', '<?php echo $myJSON ?>');  
                    </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

                        