<main id="pay">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="pay-head">
                    <h2>
                        <a href="">
                        Fruity Fresh
                        </a>
                    </h2>
                    <div class="pay-head-bottom">
                        <span>Thông tin nhận hàng</span>
                    </div>
                </div>
                <div class="section__content-input">
                    <div class="section__content-input__wrapper">
                    <div class="form__group field">
                        <fieldset class="form-group">
                            <label>Email</label>
                            <span class="required">*</span>
                            <input type="email" name="taikhoan" class="form-control form-control-lg" placeholder="Email"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Họ tên</label>
                            <span class="required">*</span>
                            <input type="text" name="ten" class="form-control form-control-lg" placeholder="Họ tên"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Số điện thoại</label>
                            <span class="required">*</span>
                            <input type="tel" name="billingPhone" class="form-control form-control-lg" placeholder="Số điện thoại"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Địa chỉ</label>
                            <span class="required">*</span>
                            <input type="text" name="diachi" class="form-control form-control-lg" placeholder="Địa chỉ"/>
                        </fieldset>
                        <div class="form-group">
                            <select class="form-control city" name="" id="select">
                                <option>Thành phố</option>
                                <?php
                                    if(count($data) > 0) {
                                        foreach($data as $value) { ?>

                                    <option value="<?php echo $value['provinceid']; ?>"> <?php echo $value['name']; ?></option>
                                <?php
                                    }}
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control huyen" name="" id="select">
                                <option>Huyện</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control xa" name="" id="select">
                                <option>Xã</option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <select class="form-control thon" name="" id="select">
                                <option>Thôn</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</main>