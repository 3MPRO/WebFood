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
<<<<<<< HEAD
            $data_danhmuc = $this->product_model->danhmuc();
            if(isset($_GET['sp']))
            {
                $data_sanpham  = $this->product_model->sanpham($_GET['sp']);
            }
            
=======
           
            $data_limit1 = $this->product_model->limit(0,4);
            $data_limit2 = $this->product_model->limit(4,4);
            $data_limit3 = $this->product_model->limit(8,4);
            $data_limit4 = $this->product_model->limit(12,4);
            $data_arr = array($data_limit1,$data_limit2,$data_limit3,$data_limit4);
            $data_random = $this->product_model->random(2);
            $data = $this->product_model->searchData('ca');
>>>>>>> 013c1eb98b7156da341c0c14d8cd0b563bf692d7
            require_once('./Views/indexview.php');  
        }

    }
       
      
    
?>
