<?php
require_once("./Models/ProductModel.php");
class ProductController 
{
    var $product_model;
    public function __construct()
    {
        $this->product_model= new product();
    }
    public function list()
    {
        $data_product = $this->product_model->all();
        require_once("Views/indexAD.php");
    }
    public function add()
    {
        $data_product = $this->product_model->all();
        $data_km = $this->product_model->khuyenmai();
        $data_lsp = $this->product_model->loaisp();
        $data_dm = $this->product_model->danhmuc();

        require_once("Views/indexAD.php");

    }
    

}
?>