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
        require_once("Views/indexAD.php");
    }

}
?>