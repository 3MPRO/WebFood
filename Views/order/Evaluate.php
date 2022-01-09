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
                        <span>Dánh giá sản phẩm</span>
                    </a>
                </div>

            </div>
        </div>
        <?php
            $length = count($DataEvalute);
            $countrating = $length;
            $tbSao = 0;
            foreach ($DataEvalute as $row) {
                $tbSao += $row['SoSao'] / $length;
            }
        ?>

        <!-- Đánh giá -->
        <div class="row md-5">
            <div class="box-rating col col-lg-8">
                <div class="product-tab-title">
                    <span>Đánh giá sản phẩm</span>
                </div>
                <div class="Evalute-box">
                    <div class="evalute-note">
                        Chia sẽ cảm nhận của bạn về sản phẩm trong đơn hàng. Lưu ý: đánh giá sản phẩm phù hợp
                    </div>
                    <div class="evalute-product">
                        <div class="evalute-product-box">
                            <div class="evalute-product-box__img">
                                <a href="">
                                    <img src="./public/images/<?= $data_sanpham[0]['hinhanh'] ?>" alt="" width="100" height="100">
                                </a>
                            </div>
                            <div class="evalute-product-box__info">
                                <h2><?= $data_sanpham[0]['TenSP'] ?></h2>
                                <span>Loại sản phẩm: <?= $data_sanpham[0]['TenLSP']?></span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="" class="ratingResult">
                    <input type="hidden" name="" class="rMaND" value="<?= $_GET['nd'] ?> ">
                    <input type="hidden" name="" class="rMaSP" value="<?= $_GET['sp'] ?> ">
                    <input type="hidden" name="" class="rMaHD" value="<?= $_GET['hd'] ?> ">
                    <div class="list-action-rating">
                        <i class="star-active star-nomal fas fa-star"></i>
                        <i class="fas star-nomal fa-star"></i>
                        <i class="fas star-nomal fa-star"></i>
                        <i class="fas star-nomal fa-star"></i>
                        <i class="fas star-nomal fa-star"></i>
                    </div>

                    <div class="Enter-Evaluate">
                        <input class="ratingComment" placeholder="Nhập đánh giá : " type="text" name="" id="">
                    </div>

                    <div class="Enter-Evaluate">
                        <input type="file" multiple="multiple" id="file-input">
                        <div id="preview"></div>
                    </div>
                    <div class="Enter-Evaluate">
                        <button href="" class="btn-rating">Đánh giá</button>
                    </div>
                </div>

            </div>
    <script>
       function previewImages() {

        var preview = document.querySelector('#preview');

        if (this.files) {
            [].forEach.call(this.files, readAndPreview);
        }

        function readAndPreview(file) {

        // Make sure `file.name` matches our extensions criteria
            if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                return alert(file.name + " is not an image");
            } // else...
            
            var reader = new FileReader();
        
            reader.addEventListener("load", function() {
                var image = new Image();
                image.height = 100;
                image.title  = file.name;
                image.src    = this.result;
                image.value = image.title;
                preview.appendChild(image);
            });
        
            reader.readAsDataURL(file);
        
        }

        }

        document.querySelector('#file-input').addEventListener("change", previewImages);
    </script>
</main>