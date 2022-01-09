<?php 
     
         $SoSao = $_POST['ratingResult'] ;
         $BinhLuan = $_POST['comment'];
         $MaSP  = $_POST['MaSP'];
         $MaND = $_POST['MaND'];
         $MaHD = $_POST['MaHD'];
         $hinhanh = $_POST['hinhanh'];
         $data = array(
             'MaHD' => $MaHD,
             'MaND' => $MaND,
             'MaSP' => $MaSP,
             'SoSao' => $SoSao,
             'BinhLuan'=> $BinhLuan,
             'hinhanh' => $hinhanh
         );
         require_once("EvaluateModel.php");
         $obj = new EvaluateModel();
         if($obj->store($data) == true){
            
            
         }
         else{

              // nếu chèn không thành công => đã đánh giá => update
             $resutUpdate =  $obj->update($data) == true;
            
             
         }
            $data_sanpham  =  $obj->sanpham($MaSP);
            //lấy đánh giá
            $DataEvalute = $obj->getEvalute($MaSP); 
            $length = count($DataEvalute);
            $tbSao = 0;
            $countrating = $length;
            foreach ($DataEvalute as $row) {
                $tbSao += $row['SoSao'] / $length;
            }
            
         
?>       
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
            }

            ?>
            <li>
                <span>5 <i class="fas fa-star"></i></span>
                <div class="rating-bar">
                    <div class="rating-bar__default 
                <?php if ($num5 == 0) {
                    echo 'rating-bar__none';
                } else {
                    echo 'rating-bar__in';
                }
                ?>
            "></div>
                </div>
                <span><?= $num5 ?> đánh giá</span>
            </li>
            <li>
                <span>4 <i class="fas fa-star"></i></span>
                <div class="rating-bar">
                    <div class="rating-bar__default
                <?php if ($num4 == 0) {
                    echo 'rating-bar__none';
                } else {
                    echo 'rating-bar__in';
                }
                ?>
            "></div>
                </div>
                <span><?= $num4 ?> đánh giá</span>
            </li>
            <li>
                <span>3 <i class="fas fa-star"></i></span>
                <div class="rating-bar">
                    <div class="rating-bar__default
            <?php if ($num3 == 0) {
                echo 'rating-bar__none';
            } else {
                echo 'rating-bar__in';
            }
            ?>
            "></div>
                </div>
                <span><?= $num3 ?> đánh giá</span>
            </li>
            <li>
                <span>2 <i class="fas fa-star"></i></span>
                <div class="rating-bar">
                    <div class="rating-bar__default
                <?php if ($num2 == 0) {
                    echo 'rating-bar__none';
                } else {
                    echo 'rating-bar__in';
                }
                ?>
            "></div>
                </div>
                <span><?= $num2 ?> đánh giá</span>
            </li>
            <li>
                <span>1 <i class="fas fa-star"></i></span>
                <div class="rating-bar">
                    <div class="rating-bar__default
            <?php if ($num1 == 0) {
                echo 'rating-bar__none';
            } else {
                echo 'rating-bar__in';
            }
            ?>
            "></div>
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
                                <i class="fas fa-star active"></i>
                            </li>
                        <?php } ?>
                        <?php
                        if ($row['SoSao'] < 5) {
                            for ($i = 1; $i <= (5 - $row['SoSao']); $i++) { ?>
                                <li>
                                    <i class="fas fa-star"></i>
                                </li>
                        <?php }
                        }
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




