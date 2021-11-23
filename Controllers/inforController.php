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
        function updateinfo(){
           
            if(isset($_GET['iduser']))
            {  
                $MaND = $_GET['iduser'];
                $data_info = array(
                    'Ho' =>    $_POST['Ho'],
                    'Ten'  =>   $_POST['Ten'],
                    'TaiKhoan' => $_POST['TaiKhoan'],
                    'SDT' => $_POST['SDT'],
                    'DiaChi'  =>   $_POST['DiaChi'],
                );
                foreach ($data_info as $key => $value) {
                    if (strpos($value, "'") != false) {
                        $value = str_replace("'", "\'", $value);
                        $data[$key] = $value;
                    }
                }
                $this->info_model->updateInfor($data_info,$MaND);
              
            }
            else {
                echo "Lỗi  từ controler rồi";
            }
            $this->list();
            require_once('./Views/indexview.php');    
        }
    }
       
      
    
?>
