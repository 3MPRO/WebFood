<section class="bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-12 a-left">
                <ul class="breadcrumb">					
                    <li class="home">
                        <a href="?act=home"><span>Trang chủ</span></a>						
                        <span class="mr_lr">&nbsp;/&nbsp;</span>
                    </li>
                    <li><span>Tin tức</span></li>
                    <span class="mr_lr">&nbsp;/&nbsp;</span>
                    <li><strong><span><?= $data_chitietTin[0]['TieuDe']; ?></span></strong></li>
                </ul>
            </div>
        </div>
    </div>
    </section>
    <?php require_once('navbarNews.php'); ?>
    </div>

    <div class="col-lg-9 col">
        <div class="content-news">
            <div class="time-post">                   
                <span class="icon posted">
                    <span class="text bold">Bui van sy</span> | <span class="text"><?= $data_chitietTin[0]['ngayDang']; ?></span>
                </span>	
            </div>
            <h1 class="content-news__title"><?= $data_chitietTin[0]['TieuDe']; ?></h1>
            <span class="border"></span>
            <?= $data_chitietTin[0]['NoiDung']; ?>
        </div>
    </div>
    
    </section>  
</section>