<?php
require_once("./Models/productModel.php");

    class ProductController {
        var $product_model;
        public function __construct()
        {
             $this->product_model = new productModel();
            
        }
        function list()

        {   
            $data_danhmuc = $this->product_model->danhmuc();
            $data_sanpham1 = $this->product_model->sanpham_danhmuc(0,10,1);
            if(isset($_GET['keyword'])) {
                $key = $_GET['keyword'];
                $data = $this->product_model->searchData($key);
            }

            require_once('./Views/indexview.php');  
        }

    }
       
      
    
?>
