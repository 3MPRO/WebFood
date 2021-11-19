<?php
require_once("./Models/model.php");
    class CategoryController {
        var $Cate_model;
        public function __construct()
        {
             $this->Cate_model = new model();
            
        }
        function list()
        {
            $data_danhmuc = $this->Cate_model->danhmuc();
    
            $data_cate_product = array();
    
            for($i=1; $i <=count($data_danhmuc);$i++){
                // test dữ liệu 0 7 
                $data_chitietDM[$i] = $this->Cate_model->sanpham_danhmuc(0,7,$i);
            }
    
            $data_limit1 = $this->Cate_model->limit(0,4);
            $data_limit2 = $this->Cate_model->limit(4,4);
            $data_limit3 = $this->Cate_model->limit(8,4);
            $data_limit4 = $this->Cate_model->limit(12,4);
            $data_arr = array($data_limit1,$data_limit2,$data_limit3,$data_limit4);
            $data_random = $this->Cate_model->random(2);
    
            //$data_banner = $this->Cate_model->banner(0,2);
    
            $data_sanpham1 = $this->Cate_model->sanpham_danhmuc(0,8,1);
            $data_sanpham2 = $this->Cate_model->sanpham_danhmuc(0,8,2);
            $data_sanpham3 = $this->Cate_model->sanpham_danhmuc(0,8,3);
    
            require_once('./Views/indexview.php');
            
        }

    }
       
      
    
?>
