<?php
require_once("./Models/model.php");
    class LoginController {
        var $Cate_model;
        public function __construct()
        {
             $this->Cate_model = new model();
            
        }
        function list()
        {
            // data_danhmuc để gọi lại thanh nav .  :v
            $data_danhmuc = $this->product_model->danhmuc();

            
            require_once('./Views/indexview.php');
            
        }

    }
       
      
    
?>
