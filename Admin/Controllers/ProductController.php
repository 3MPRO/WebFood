<?php
require_once("./Models/ProductModel.php");
class ProductController 
{
    var $product_model;
    
    public function __construct()
    {
        $this->product_model= new product();
    }
    public function list()
    {
        $data_product = $this->product_model->all();
        require_once("Views/indexAD.php");
    }
    public function add()
    {
        $data_product = $this->product_model->all();
        $data_km = $this->product_model->khuyenmai();
        $data_lsp = $this->product_model->loaisp();
        $data_dm = $this->product_model->danhmuc();

        require_once("Views/indexAD.php");

    }
    public function store(){
        $target_dir = "../public/images/";
        $hinhAnhChinh ="";
        $target_file = $target_dir . basename($_FILES["hinhAnhChinh"]["name"]);
        $status_upload = move_uploaded_file($_FILES["hinhAnhChinh"]["tmp_name"],$target_file);
        if($status_upload){// up k lỗi
            $hinhAnhChinh = basename($_FILES['hinhAnhChinh']['name']);
        }

        $hinhAnh1 ="";
        $target_file = $target_dir . basename($_FILES['hinhAnh1']["name"]);
        $status_upload = move_uploaded_file($_FILES['hinhAnh1']['tmp_name'],$target_file);
        if($status_upload){// up k lỗi
            $hinhAnh1 = basename($_FILES['hinhAnh1']['name']);
        }

        $hinhAnh2 ="";
        $target_file = $target_dir . basename($_FILES['hinhAnh2']["name"]);
        $status_upload = move_uploaded_file($_FILES['hinhAnh2']['tmp_name'],$target_file);
        if($status_upload){// up k lỗi
            $hinhAnh2 = basename($_FILES['hinhAnh2']['name']);
        }

        $trangThai = 0;
        if(isset($POST['TrangThai'])){
            $trangThai = $POST['TrangThai'];

        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data_sanpham = array(
            'MASP'=>'null',
            'MaLSP' =>    $_POST['MaLSP'],
            'TenSP'  =>   $_POST['TenSP'],
            'DonGia' => $_POST['DonGia'],
            'SoLuong' => $_POST['SoLuong'],
            'MaKM' =>  $_POST['MaKM'],
            'SoSao' =>  0,
            'SoDanhGia' => 0,
            'TrangThai' => $trangThai,
           
            'ThoiGian' => $ThoiGian
        );
       $this->product_model->store($data_sanpham);
     
        
       //echo "<script>console.log($this->idsp)</script>";
       $idsp = $this->product_model->getIdProductnew(); // lấy id sản phẩm mới chèn ;
        $data_img = array(   
            $idsp."1" => $hinhAnhChinh,
            $idsp."2"  => $hinhAnh1,
            $idsp."3"  => $hinhAnh2
        );
        
        $this->product_model->insertImg($data_img);
    }
    
   
    

}
?>
