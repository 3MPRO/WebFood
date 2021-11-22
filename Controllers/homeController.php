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
            if(isset($_GET['cate']))
            {   $category = $_GET['cate'];
                $data_sanpham = $this->product_model->sanpham_danhmuc(0,8,$category);
            }
            require_once('./Views/indexview.php');  
            require_once('./Views/indexview.php');  
        }

    }
       
      
    
?>
