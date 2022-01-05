<?php 
     
         $SoSao = $_POST['ratingResult'] ;
         $BinhLuan = $_POST['comment'];
         $MaSP  = $_POST['MaSP'];
         $MaND = $_POST['MaND'];
         $data = array(
             'MaND' => $MaND,
             'MaSP' => $MaSP,
             'SoSao' => $SoSao,
             'BinhLuan'=> $BinhLuan
         );
         require_once("EvaluateModel.php");
         $obj = new EvaluateModel();
         $obj->store($data);
         require_once("productModel.php");
         $product_model = new productModel();
         $data_sanpham  = $product_model->sanpham($_GET['sp']);
              //lấy đánh giá
         $DataEvalute = $product_model->getEvalute($_GET['sp']); 
?>       
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

