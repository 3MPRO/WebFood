<?php
require_once("./Models/productModel.php");
    class homeController {
        var $product_model;
        public function __construct()
        {
             $this->product_model = new productModel();  
        }
        function list()
        {   
            $data_danhmuc = $this->product_model->danhmuc();
            $data_loaisp = array();
            for($i=1; $i <=count($data_danhmuc);$i++){
                // test dữ liệu 0 7 
                $data_loaisp[$i] = $this->product_model->loaisp_danhmuc($i);
            }
                 
            require_once('./Views/indexview.php');  
        }

    }
       
      
    
?>
