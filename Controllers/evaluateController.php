<?php
require_once("./Models/productModel.php");

    class  EvaluateController{
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

                 //lấy đánh giá
                $DataEvalute = $this->product_model->getEvalute($_GET['sp']);
                    

            }
            


    

           

            require_once('./Views/indexview.php');  
        }

    }
       
      
    
?>
