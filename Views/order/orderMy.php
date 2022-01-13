<main id="order-my">
    <div class="container">
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
                        <span>Đơn hàng</span>
                    </strong>
                </div>
            </div>
        </div>
        <h2 style="font-size:26px; margin-bottom: 20px;">Đơn hàng của bạn</h2>
        <div class="tab-order">
            <ul class="tab-order__list">
                <li class="tab-order__item active">
                    <span>Tất cả</span>
                </li>
                <li class="tab-order__item">
                    Chờ xác nhận
                </li>
                <li class="tab-order__item">
                    <span>Đã xác nhận</span>
                </li>
                <li class="tab-order__item">
                    <span>Đã giao thành công</span>
                </li>
            </ul>
        </div>
        <div class="order-my__head">
            <div class="table-all">
                <table class="table table-cart table-order active" id="my-orders-table">
                    <thead class="thead-default">
                        <tr>
                            <th>Đơn hàng</th>
                            <th>Ngày</th>
                            <th>Địa chỉ</th>
                            <th>Giá trị đơn hàng</th>
                            <th>TT đơn hàng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($data_hoadon) >0) {
                            foreach($data_hoadon as $item) { ?>
                            <tr>
                                <th>
                                    <a href="?act=orderMy&xuli=order-detail&maHD=<?= $item['MaHD']?>"><?= $item['MaHD']?></a>
                                </th>
                                <th><?= $item['NgayLap']?></th>
                                <th><?= $item['DiaChi']?></th>
                                <th><?php echo number_format($item['TongTien']+$item['phiShip'])?> đ</th>
                                <th>
                                    <?php if($item['TrangThai'] == 1)
                                            echo 'Đã xác nhận';
                                        else 
                                            echo 'Chưa duyệt';
                                    ?>
                                </th>
                                <th>
                                    <a href="?act=orderMy&xuli=delete-order&maHD=<?php echo $item['MaHD']?>" class="<?php if($item['TrangThai'] == 1)
                                            echo 'btn-usset-order__disble';
                                        else 
                                            echo 'btn-usset-order';
                                    ?>" disabled="disabled">Hủy</a>
                                    <a href="?act=orderMy&xuli=order-detail&maHD=<?= $item['MaHD']?>" class="btn-view__order">Xem</a>
                                </th>
                            </tr>
                        <?php  }} else {?>
                            <tr>
                                <td colspan="6">
                                    <div style="display: flex;justify-content: center;">
                                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/5fafbb923393b712b96488590b8f781f.png" alt="">
                                    </div>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
                <table class="table table-cart table-order" id="my-orders-table">
                    <thead class="thead-default">
                        <tr>
                            <th>Đơn hàng</th>
                            <th>Ngày</th>
                            <th>Địa chỉ</th>
                            <th>Giá trị đơn hàng</th>
                            <th>TT đơn hàng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php if(count($data_hoadonChoXN) >0) {
                            foreach($data_hoadonChoXN as $item) { ?>
                            <tr>
                                <th>
                                    <a href="?act=orderMy&xuli=order-detail&maHD=<?= $item['MaHD']?>"><?= $item['MaHD']?></a>
                                </th>
                                <th><?= $item['NgayLap']?></th>
                                <th><?= $item['DiaChi']?></th>
                                <th><?php echo number_format($item['TongTien']+$item['phiShip'])?> đ</th>
                                <th>
                                    <?php if($item['TrangThai'] == 1)
                                            echo 'Đã xác nhận';
                                        else 
                                            echo 'Chưa duyệt';
                                    ?>
                                </th>
                                <th>
                                    <a href="?act=orderMy&xuli=delete-order&maHD=<?php echo $item['MaHD']?>" class="<?php if($item['TrangThai'] == 1)
                                            echo 'btn-usset-order__disble';
                                        else 
                                            echo 'btn-usset-order';
                                    ?>" disabled="disabled">Hủy</a>
                                    <a href="?act=orderMy&xuli=order-detail&maHD=<?= $item['MaHD']?>" class="btn-view__order">Xem</a>
                                </th>
                            </tr>
                        <?php  }} else {?>
                            <tr>
                                <td colspan="6">
                                    <div style="display: flex;justify-content: center;">
                                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/5fafbb923393b712b96488590b8f781f.png" alt="">
                                    </div>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
                <table class="table table-cart table-order" id="my-orders-table">
                    <thead class="thead-default">
                        <tr>
                            <th>Đơn hàng</th>
                            <th>Ngày</th>
                            <th>Địa chỉ</th>
                            <th>Giá trị đơn hàng</th>
                            <th>TT đơn hàng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($data_hoadonDaXN) >0) {
                            foreach($data_hoadonDaXN as $item) { ?>
                            <tr>
                                <th>
                                    <a href="?act=orderMy&xuli=order-detail&maHD=<?= $item['MaHD']?>"><?= $item['MaHD']?></a>
                                </th>
                                <th><?= $item['NgayLap']?></th>
                                <th><?= $item['DiaChi']?></th>
                                <th><?php echo number_format($item['TongTien']+$item['phiShip'])?> đ</th>
                                <th>
                                    <?php if($item['TrangThai'] == 1)
                                            echo 'Đã xác nhận';
                                        else 
                                            echo 'Chưa duyệt';
                                    ?>
                                </th>
                                <th>
                                    <a href="?act=orderMy&xuli=delete-order&maHD=<?php echo $item['MaHD']?>" class="<?php if($item['TrangThai'] == 1)
                                            echo 'btn-usset-order__disble';
                                        else 
                                            echo 'btn-usset-order';
                                    ?>" disabled="disabled">Hủy</a>
                                    <a href="?act=orderMy&xuli=order-detail&maHD=<?= $item['MaHD']?>" class="btn-view__order">Xem</a>
                                </th>
                            </tr>
                        <?php  }} else {?>
                            <tr>
                                <td colspan="6">
                                    <div style="display: flex;justify-content: center;">
                                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/5fafbb923393b712b96488590b8f781f.png" alt="">
                                    </div>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
                <table class="table table-cart table-order" id="my-orders-table">
                    <thead class="thead-default">
                        <tr>
                            <th>Đơn hàng</th>
                            <th>Ngày</th>
                            <th>Địa chỉ</th>
                            <th>Giá trị đơn hàng</th>
                            <th>TT đơn hàng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($data_hoadonDaGiao) >0) {
                            foreach($data_hoadonDaGiao as $item) { ?>
                            <tr>
                                <th>
                                    <a href="?act=orderMy&xuli=order-detail&maHD=<?= $item['MaHD']?>"><?= $item['MaHD']?></a>
                                </th>
                                <th><?= $item['NgayLap']?></th>
                                <th><?= $item['DiaChi']?></th>
                                <th><?php echo number_format($item['TongTien']+$item['phiShip'])?> đ</th>
                                <th>
                                    <?php if($item['TrangThai'] == 1)
                                            echo 'Đã xác nhận';
                                        else 
                                            echo 'Chưa duyệt';
                                    ?>
                                </th>
                                <th>
                                    <a href="?act=orderMy&xuli=order-detail&maHD=<?= $item['MaHD']?>" class="btn-view__order">Xem</a>
                                </th>
                            </tr>
                        <?php  }} else {?>
                            <tr>
                                <td colspan="6">
                                    <div style="display: flex;justify-content: center;">
                                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/5fafbb923393b712b96488590b8f781f.png" alt="">
                                    </div>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
                   
            </div>
        </div>
    </div>
</main>