
<?php
require_once("Models/ordermyModel.php");
class OrderMyController
{
    var $order_model;
    public function __construct()
    {
        $this->order_model = new ordermyModel();
    }
    function list_order()
    {
        $data_danhmuc = $this->order_model->danhmuc();
        $data_loaisp = $this->order_model->loaisp_danhmuc();
        $MaND = $_SESSION['login']['MaND'];
        $data_hoadon = $this->order_model->showHoaDon($MaND);
        $data_hoadonChoXN = $this->order_model->showHoaDonChoXN($MaND,0);
        $data_hoadonDaXN = $this->order_model->showHoaDonChoXN($MaND,1);
        $data_hoadonDaGiao = $this->order_model->showHoaDonGiaoTC($MaND,1);
        require_once('Views/indexview.php');
    }
    function deteteHoaDon(){
       $MaHD = $_GET['maHD'];
       $this->order_model->deleteHoaDon($MaHD);
       $path = 'Location:?act=orderMy';
       header($path);
    }
    
    function orderDetail() {
        $data_danhmuc = $this->order_model->danhmuc();
        $data_loaisp = $this->order_model->loaisp_danhmuc();
        $MaHD = $_GET['maHD'];
        $data_detail_order = $this->order_model->orderDetail($MaHD);
        $data_detail_order_product = $this->order_model->orderDetail_product($MaHD);
        $data_list_star = $this->order_model->getDanhGiaSao($MaHD);
        // print_r($data_list_star);
        // $data_star = array();
        // for($i = 0; $i < count($data_detail_order_product); $i++){
        //     array_push($data_star, $data_list_star[$data_detail_order_product[$i]['MaSP']]);
        // }
        // print_r($data_star);
        require_once('Views/indexview.php');
    }
}