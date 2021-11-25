<?php
require_once("Models/cart.php");
class CartController
{
    var $cart_model;
    public function __construct()
    {
        $this->cart_model = new Cart();
    }
    function list_cart()
    {
        // $data_danhmuc = $this->cart_model->danhmuc();

        // $data_chitietDM = array();

        // for ($i = 1; $i <= count($data_danhmuc); $i++) {
        //     $data_chitietDM[$i] = $this->cart_model->chitietdanhmuc($i);
        // }

        $count = 0;
        if (isset($_SESSION['product'])) {
            foreach ($_SESSION['product'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        require_once('Views/indexview.php');
    }
    function add_cart()
    {
        $id = $_GET['id'];
        $data = $this->cart_model->detail_sp($id);
        print_r($data);
        $count = 0;
        if (isset($_SESSION['product'][$id])) {
            $arr = $_SESSION['product'][$id];
            $arr['soluong'] = $arr['soluong'] + 1;
            $arr['ThanhTien'] = $arr['soluong'] * $arr["DonGia"];
            $_SESSION['product'][$id] = $arr;
        } else {
            $arr['MaSP'] = $data['MaSP'];
            $arr['TenSP'] = $data['TenSP'];
            $arr['DonGia'] = $data['DonGia'];
            $arr['soluong'] = 1;
            $arr['ThanhTien'] = $data['DonGia'];
            $arr['hinhanh'] = $data['hinhanh'];
            $_SESSION['product'][$id] = $arr;
        }

        foreach ($_SESSION['product'] as $value) {
            $count += $value['ThanhTien'];
        }

        header('Location:?act=home');
    }

}
