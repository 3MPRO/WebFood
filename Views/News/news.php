<div class="main-index">
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-12 a-left">
                    <ul class="breadcrumb">					
                        <li class="home">
                            <a href="?act=home"><span>Trang chủ</span></a>						
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>
                        <li><strong><span>Tin tức</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php require_once('navbarNews.php'); ?>
    </div>
        <div class="right-content col-xl-9 col-lg-9 col-md-12 col-12 order-lg-last order-xl-last">
            <div class="title-block-page">
                <h1>Tin tức</h1>
            </div>
            <div class="row">
                <?php
                    foreach ($data_tintuc as $item) { ?>
                        <div class="col-12 col-md-12 col-12">
                            <div class="item_blog_base">
                                <a href="?act=news&chitiet=chitiettin&ma=<?= $item['idTinTuc']?>" class="video_play thumb" data-toggle="modal" data-target="#myModalYoutube" title="<?= $item['TieuDe'];?>">
                                    <img src="<?= $item['hinhanh'];?>" class="img-news-post">
                                </a>
                                <div class="content_blog clearfix">
                                    <h3><a href="?act=news&chitiet=chitiettin&ma=<?= $item['idTinTuc']?>" class="a-title"><?= $item['TieuDe'];?></a></h3>
                                    <p>Carbohydrate là chất bột đường luôn được khuyến nghị cắt giảm nếu thực hiện chế độ ăn giảm cân. Điều này dẫn đến lầm tưởng về carbohydrate là “kẻ thù” của cân nặng. Tuy nhiên, nó không “xấu” như chúng ...</p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            </div>

            <nav aria-label="Page navigation">
              <ul class="pagination pagination-lg">
                <li class="page-item <?php if($_GET['page'] == 1) echo 'disabled'?>">
                  <a class="page-link" href="?act=news&page=<?php echo $_GET['page']-1; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <?php
                    for ($i = 1; $i <= $total_page; $i++){ 
                        if ($i == $current_page){ ?>
                            <li class="page-item <?php if($i == $_GET["page"]) echo 'active'; ?>">
                            <a class="page-link" href="?act=news&page=<?php echo $i; ?>"><?= $i ?></a></li>
                        <?php }
                        else{ ?>
                            <li class="page-item <?php if($i == $_GET["page"]) echo 'active'; ?>">
                            <a class="page-link" href="?act=news&page=<?php echo $i; ?>"><?= $i ?></a></li>
                        <?php } }?>
                <li class="page-item <?php if($total_page == 1) echo 'disabled'?>">
                  <a class="page-link" href="?act=news&page=<?php echo $_GET['page']+1; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            <div class="text-xs-right pageinate-page-blog section clearfix">
            </div>	
        </div>	
		<!-- </div>
	    </div> -->
    </section>
</div>