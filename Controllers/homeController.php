<?php
require_once("./Models/productModel.php");
    class homeController {
       
        var $product_model,$page;
        public function __construct()
        {
             $this->product_model = new productModel();  
        }
        function list()
        {  
            $data_danhmuc = $this->product_model->danhmuc();

            $data_loaisp = $this->product_model->loaisp_danhmuc();

            // print_r($data_loaisp);
            if(isset($_GET['cate']))
            {   
                if(isset($_GET['loai'])) {
                    $category = $_GET['loai'];
                    $data_tenLSP = $this->product_model->getTenLoaiSP($category);

                    $lenghtData = $this->product_model->count_chitietLoai($category);
                    $total_records = count($lenghtData);
                    // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $limit = 9;
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
                    $data_sanpham = $this->product_model->getChiTietSanPham($category,$start,$limit);

                }else {
                    $category = $_GET['cate'];
                    $lenghtData = $this->product_model->count_sp($category);
                    $total_records = count($lenghtData);
                    // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $limit = 9;
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
                    $data_sanpham = $this->product_model->getChiTietSanPham($category,$start,$limit);
                    $data_sanpham = $this->product_model->sanpham_danhmuc($start,$limit,$category);

                }
            }

            



            $data_sanpham1 = $this->product_model->sanpham_danhmuc(0,10,1);
            $data_sanpham2 = $this->product_model->sanpham_danhmuc(0,10,3);
            $data_sanpham3 = $this->product_model->sanpham_danhmuc(0,10,2);
            $data_khuyenmai = $this->product_model->sanpham_khuyenmai();
            
            $data_tinTucNoiBat = $this->product_model->getTinTuc(0,4);

            $data_limit1 = $this->product_model->limit(0,4);
            $data_limit2 = $this->product_model->limit(4,4);
            $data_limit3 = $this->product_model->limit(8,4);
            $data_limit4 = $this->product_model->limit(12,4);
            $data_arr = array($data_limit1,$data_limit2,$data_limit3,$data_limit4);
            $data_random = $this->product_model->random(2);
            $data_banner = $this->product_model->getBanner();

            // GET DATA SAN PHAM NOI BAT
            $data_sanphamnoibat = $this->product_model->sanphamnoibat(8);
            $data_arr_sanphamnoibat = array();
            for ($i = 0; $i < count($data_sanphamnoibat); $i++) {
                $data_item_sp = $this->product_model->sanpham_km($data_sanphamnoibat[$i]['MaSP']);
                array_push($data_arr_sanphamnoibat, $data_item_sp);
            }
            

            // GET DATA SAN PHAM TOP
            $data_topsp = $this->product_model->getSanPhamBanChay(8);
            $data_arr_topsp = array();
            for ($i = 0; $i < count($data_topsp); $i++) {
                $data_item_sp = $this->product_model->sanpham_km($data_topsp[$i]['MaSP']);
                array_push($data_arr_topsp, $data_item_sp);
            }
            require_once('./Views/indexview.php');  
            
        }
        
    }
       
      
    
?>
