<?php
    require_once("connection.php");
    class model{
        var $conn;
        function __construct()
        {
            $conn_obj = new connection();
            $this->conn = $conn_obj->conn;
        }

        function limit($a, $b)
        {
            $query =  "SELECT * from sanpham WHERE TrangThai = 1  ORDER BY ThoiGian DESC limit $a,$b";
    
            require("result.php");
    
            return $data;
        }
        function random($id)
        {
            $query = "SELECT * FROM SanPham WHERE TrangThai = 1 ORDER BY RAND () LIMIT $id";
            require("result.php");
            
            return $data;
        }
        function danhmuc()
        {
            $query =  "SELECT * from DanhMuc";
    
            require("result.php");
            
            return $data;
        }


<<<<<<< HEAD
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
             echo $data;
        }

        function searchData($key) {
            $query = "SELECT * FROM sanpham, hinhanh WHERE sanpham.MaSP = hinhanh.masp and TenSP LIKE '$key%' GROUP by sanpham.MaSP";
            require("result.php");
            return $data;
        }
=======
        
>>>>>>> 6a411e87896b9e4068f892064ed3694ad151d8c8
    }
?>