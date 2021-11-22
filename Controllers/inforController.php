<?php
require_once("./Models/inforModel.php");
    class Infor{
       
        var $info_model;
        public function __construct()
        {
             $this->info_model = new inforModel();  
        }
        function list()
        {   
            // data_danhmuc để gọi lại thanh nav .  :v
            $data_danhmuc = $this->info_model->danhmuc();

            if(isset($_GET['iduser']))
            {   
                $MaND = $_GET['iduser'];
                $data_info = $this->info_model->infor($MaND);
            }
            else {
                echo "Lỗi  từ controler rồi";
            }
            require_once('./Views/indexview.php');     
        }

    }
       
      
    
?>
