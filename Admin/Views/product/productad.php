    <a class ="btn-addproduct" href="?mod=sanpham&act=add"> Thêm mới</a>
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
                        <a class="btn-addproduct btnUpdate--edit">Sửa</a>
                        <a class="btn-addproduct btnUpdate--delete">Xóa</a>
                    </div>
                </td>
            </tr>
        <?php   }?> 
        
    </table>
