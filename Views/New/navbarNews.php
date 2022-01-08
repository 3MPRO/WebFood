<section class="blogpage clearfix">
    <div class="container" itemscope="" itemtype="https://schema.org/Blog">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <aside class="aside-item blog-sidebar sidebar-category collection-category margin-bottom-25">
                    <h2 class="title-block"><span class="leaf">Danh mục tin</span></h2>
                    <div class="aside-content">
                        <nav class="nav-category navbar-toggleable-md">
                            <ul class="nav navbar-pills">
                                <li class="nav-item"><a class="nav-link" href="?act=home">Trang chủ</a></li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        Sản phẩm
                                    </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="?act=product&cate=6">Kẹo</a></li>
                                <li class="nav-item"><a class="nav-link" href="?act=product&cate=8">Đồ khô, gạo</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </aside>
        <div class="blog-aside aside-item blog-aside-article">
            <h2 class="title-block"><a class="leaf" href="#" title="Tin nổi bật">Tin nổi bật</a></h2>
            <div class="aside-content-article aside-content margin-top-0">
                <div class="blog-list blog-image-list">
                    <?php
                        foreach ($data_tinTucNoiBat as $item) { ?>
                            <div class="loop-blog">
                                <div class="thumb-left">
                                    <a href="?act=news&chitiet=chitiettin&ma=<?= $item['idTinTuc']?>">	
                                        <img class="lazyload loaded" src="<?= $item['hinhanh'];?>" title="Mẹo giúp chọn một số hoa quả nhập khẩu tươi ngon" alt="<?= $item['TieuDe'];?>" data-was-processed="true" width="100" height="70">
                                    </a>
                                </div>
                                <div class="name-right">
                                    <h3><a 
                                    href="?act=news&chitiet=chitiettin&ma=<?= $item['idTinTuc']?>" title="<?= $item['TieuDe'];?>"><?= $item['TieuDe'];?></a></h3>
                                </div>
                            </div>
                        <?php } ?>
                </div>
            </div>
        </div>