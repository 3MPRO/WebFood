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
            $data_loaisp = array();
            for($i=1; $i <=count($data_danhmuc);$i++){
                // test dữ liệu 0 7 
                $data_loaisp[$i] = $this->product_model->loaisp_danhmuc($i);
            }
            $data_limit1 = $this->product_model->limit(0,4);
            $data_limit2 = $this->product_model->limit(4,4);
            $data_limit3 = $this->product_model->limit(8,4);
            $data_limit4 = $this->product_model->limit(12,4);
            $data_arr = array($data_limit1,$data_limit2,$data_limit3,$data_limit4);
            $data_random = $this->product_model->random(2);
    
            if(isset($_GET['cate']))
            {   $category = $_GET['cate'];
                $data_sanpham = $this->product_model->sanpham_danhmuc(0,8,$category);
            }
            require_once('./Views/indexview.php');  
        }

    }
       
      
    
?>
