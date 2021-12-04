    <div class="add-product-form">
    <a class ="btn-addproduct" href="?mod=sanpham&act=add"> Thêm mới</a>
    <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning alert-warning_productlist">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
    <?php } ?>
    <div class="head-tableProduct">
        <div class="head-tableProduct_content">
            <Span>Show</Span>
            <select name="" id="">
                <option value="10">10</option>
                <option value="2">25</option> 
                <option value="3">50</option> 
                <option value="4">100</option>
            </select>
            <span>entries</span>
        </div>
        <div class="head-tableProduct_content">
            <Span>Search:</Span>
            <input type="text">
        </div>
        
    </div>
    <table class ="product-table">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá thành</th>
            <th>Số lượng</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
       <?php foreach($data_product as $value){ ?>
                <tr>
                <td><?= $value['MaSP']?></td>
                <td><?= $value['TenSP'] ?></td>
                <td><?= $value['DonGia'] ?></td>
                <td><?= $value['SoLuong'] ?></td>
                <td><?= $value['TrangThai'] ?></td>
                <td>
                    <div class="">
                    <a class="btn-addproduct btnUpdate--view">Xem</a>
                        <a href="?mod=sanpham&act=edit&idsp=<?= $value['MaSP']?>" class="btn-addproduct btn--edit">Sửa</a>
                        <a href="?mod=sanpham&act=delete&idsp=<?= $value['MaSP']?>" class="btn-addproduct btnUpdate--delete" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn-addproduct btn-block btn--delete">Xóa</a>
                    </div>
                </td>
            </tr>
        <?php   }?> 
        
    </table>
    </div>