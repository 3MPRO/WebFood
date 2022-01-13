
    <?php 
    ?>
    <form id ="table"c lass="add-product-form"action="?mod=news&act=store" method="POST" enctype="multipart/form-data">
    <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
    <h3>Thêm sản phẩm mới : </h3>
    <fieldset class="add-product-item">
        <label>Tiêu đề</label>
        <input class="form-control" type="text" name="tieude" id="">
    </fieldset>
    <fieldset class="add-product-item">
        <label>Trích dẫn</label>
        <input  class="form-control" type="text" name="trichdan" id="">
    </fieldset>
    <fieldset class="add-product-item">
        <label>Ngày Đăng</label>
        <input  class="form-control" type="text" name="ngaydang" id="" value="<?php $today = date("Y-m-d"); echo $today; ?>">
    </fieldset>
    <fieldset class="add-product-item">
        <label>Link ảnh chính</label>
        <input type="text" class="form-control" id="" placeholder="" name="hinhanh">
    </fieldset>
    <fieldset class="add-product-item">
        <label>Mô tả</label>
        <textarea class="form-control" type="text" name="noidung" id="" rows="20" cols="50">
        </textarea>
    </fieldset>
    <button  class ="btn-addproduct"> Thêm </button>
    
   
</form>

