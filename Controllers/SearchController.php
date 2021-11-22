<?php
require_once("Models/shop.php");
class SearchController
{
    var $shop_model;
    public function __construct()
    {
        $this->shop_model = new Shop();
    }
    function list()
    {

        $data_danhmuc = $this->shop_model->danhmuc();

        $data_loaisp = $this->shop_model->loaisp(0, 8);

        $data_chitietDM = array();
        $data = $this->shop_model->searchData('Ca');
        
        require_once('Views/indexview.php');
    }
}
