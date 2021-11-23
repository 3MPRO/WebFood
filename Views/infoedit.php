
      
        <section id ="main">
            <div class="container ">
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
                                <span>Chỉnh sửa thông tin</span>
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="container-infor">
                  <?php if(isset($data_info)) { 
                  
                      ?>
                    
                    <form class ="" action="?act=user&check=updateinfo&iduser=<?= $data_info[0]['MaND']?>" method="post">
                        <label class="container-infor__title" >Thông Tin Tài Khoản</label>
                        <h2 class ="container-infor__name">Khách hàng: <span><?= $data_info[0]['Ho']. " ".$data_info[0]['Ten'] ?></span></h2>
                        <fieldset class="container-infor__item name-login">
                            <label>Tên Đăng nhập</label>
                            <span class="required">*</span>
                            <input name = "TaiKhoan" type="text" value="<?= $data_info[0]['TaiKhoan']?>" class="form-control form-control-lg edit  " placeholder=""/>
                            <div class="search-result"></div>
                        </fieldset>
                    
                               
                        </fieldset>
                        <fieldset class="container-infor__item">
                            <label>Họ </label>
                            <span class="required">*</span>
                            <input type="text" name ="Ho" value ="<?= $data_info[0]['Ho'] ?>"class="form-control form-control-lg edit" placeholder=""/>
                        </fieldset>
                        <fieldset class="container-infor__item">
                            <label>Tên </label>
                            <span class="required">*</span>
                            <input type="text" name ="Ten" value ="<?= $data_info[0]['Ten'] ?>"class="form-control form-control-lg edit" placeholder=""/>
                        </fieldset>
    
                        <fieldset class="container-infor__item">
                            <label>Số điện thoại </label>
                            <span class="required">*</span>
                            <input type="tel" name ="SDT" value="<?= $data_info[0]['SDT']?>" class="form-control form-control-lg edit" placeholder=""/>
                        </fieldset>
    
                        <fieldset class="container-infor__item">
                            <label>Địa chỉ </label>
                            <span class="required">*</span>
                            <input type="text" name = "DiaChi" value="<?= $data_info[0]['DiaChi']?>" class="form-control form-control-lg edit" placeholder=""/>
                        </fieldset>

                        <div class="container-infor__item">
                            <input class="btn-edit" type="submit" value="Cập Nhật">
                        </div>
                       
                    </form>
                  <?php } 
                  else {
                      echo "khong lay dc ";
                    }
                  ?>
                </div>
               
            </div>
        </section>
    
