<?php 
    require_once("model.php");
    class productModel extends model{
        function sanpham_danhmuc($a,$b,$danhmuc)
        {  
             $query ="SELECT * from sanpham , loaisanpham, danhmuc, hinhanh
             WHERE  trangThai = 1  
             		and loaisanpham.MaDM = danhmuc.MaDM 
             		and sanpham.MaLSP = loaisanpham.MaLSP 
             		and loaisanpham.MaDM = '$danhmuc' 
                    AND sanpham.MaSP = hinhanh.masp
                    GROUP by sanpham.MaSP
         		    ORDER BY ThoiGian DESC limit $a,$b";
             require("result.php");
             return $data;  
        }
        public function sanpham($masp)
        {
            $query ="SELECT * from sanpham
                        where MaSP = '$masp'";
            require("result.php");
            return $data;
        }
        public function loaisp_danhmuc($danhmuc)
        {
            $query ="SELECT * from danhmuc, loaisanpham
                     where danhmuc.MaDM = loaisanpham.MaDM";
            require("result.php");
            return $data; 
        }
    }

?>