<?php
    $id = $_GET['id'];
    $data = $this->cart_model->detail_sp($id);
    print_r($data);
    $count = 0;
    if (isset($_SESSION['product'][$id])) {
        $arr = $_SESSION['product'][$id];
        $arr['soluong'] = $arr['soluong'] + $sl;
        $arr['ThanhTien'] = $arr['soluong'] * $arr["DonGia"];
        $_SESSION['product'][$id] = $arr;
        echo $sl;
        
    } else {
        $arr['MaSP'] = $data['MaSP'];
        $arr['TenSP'] = $data['TenSP'];
        $arr['DonGia'] = $data['DonGia'];
        $arr['soluong'] = $sl;
        $arr['ThanhTien'] = $data['DonGia']*$arr['soluong'];
        $arr['hinhanh'] = $data['hinhanh'];
        $_SESSION['product'][$id] = $arr;
    }

    foreach ($_SESSION['product'] as $value) {
        $count += $value['ThanhTien'];
    }

?>