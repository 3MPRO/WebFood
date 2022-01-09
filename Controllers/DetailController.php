<?php
require_once("./Models/productModel.php");

    class  DetailController{
        var $product_model;
        public function __construct()
        {
             $this->product_model = new productModel();
            
        }
        function list()
        {   
            $data_danhmuc = $this->product_model->danhmuc();
            $data_loaisp = $this->product_model->loaisp_danhmuc();
            if(isset($_GET['sp']))
            {
                $data_sanpham  = $this->product_model->sanpham($_GET['sp']);
                if($data_sanpham!=null){
                    $data_lq = $this->product_model->sanpham_danhmuc(0,4,$data_sanpham[0]['MaDM']);
                }

                $this->product_model->clicksanpham($_GET['sp']);

                 //lấy đánh giá
                $DataEvalute = $this->product_model->getEvalute($_GET['sp']);
                    
                // Lấy số lượng đã bán
                $data_count_product = $this->product_model->getProductSold($_GET['sp']);
                
                $data_sanPhamBanChay = $this->product_model->getSanPhamBanChay(4);
                $data_arr_topsp = array();
                for ($i = 0; $i < count($data_sanPhamBanChay); $i++) {
                    $data_item_sp = $this->product_model->sanpham_km($data_sanPhamBanChay[$i]['MaSP']);
                    array_push($data_arr_topsp, $data_item_sp);
                }
            }
            
            require_once('./Views/indexview.php');  
        }

    }
       
      
    
?>
