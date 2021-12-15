<?php
require_once("./Models/favoriteModel.php");
    class favoriteController {
       
        var $favorite_model;
        public function __construct()
        {
             $this->favorite_model = new favoriteModel();  
        }
        function list()
            {  
            $id = $_POST['id'];
            $data_danhmuc = $this->favorite_model->danhmuc();
            $data_sanpham = $this->favorite_model->allProduct();
            $myJSON = json_encode($data_sanpham);
            require_once('./Views/indexview.php');  
        }

    }
       
      
    
?>
