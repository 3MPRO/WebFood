<?php
require_once("./Models/newsModel.php");
    class newsController {
       
        var $news_model;
        public function __construct()
        {
             $this->news_model = new newsModel();  
        }
        function list()
            {  
            $data_danhmuc = $this->news_model->danhmuc();
            $data_loaisp = $this->news_model->loaisp_danhmuc();

            $data_tinTucNoiBat = $this->news_model->getTinTuc(0,4);
            $total_records = count($this->news_model->getTinTucAll());
            // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 5;
            // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
            // tổng số trang
            $total_page = ceil($total_records / $limit);
            // Giới hạn current_page trong khoảng 1 đến total_page
            if ($current_page > $total_page){
                $current_page = $total_page;
            }
            else if ($current_page < 1){
                $current_page = 1;
            }
            // Tìm Start
            $start = ($current_page - 1) * $limit;
            $data_tintuc = $this->news_model->getTinTuc($start, $limit);
            
            if(isset($_GET['ma'])){
                $data_chitietTin = $this->news_model->getChiTietTin($_GET['ma']);
            }
            require_once('./Views/indexview.php');  
        }

    }
       
      
    
?>
