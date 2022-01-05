<?php 
    require_once("model.php");
    class productModel extends model{
        function sanpham_danhmuc($a,$b,$danhmuc)
        {  
            $query ="SELECT * from sanpham , loaisanpham, danhmuc, hinhanh,khuyenmai
             WHERE sanpham.trangThai = 1 
             		and loaisanpham.MaDM = danhmuc.MaDM 
                    and khuyenmai.MaKM = sanpham.MaKM 
             		and sanpham.MaLSP = loaisanpham.MaLSP 
             		and loaisanpham.MaDM = '$danhmuc' 
                    AND sanpham.MaSP = hinhanh.masp
                    GROUP by sanpham.MaSP
         		    ORDER BY ThoiGian DESC limit $a,$b";
            require("result.php");
            return $data;  
        }
        function count_sp($danhmuc) {
            $query ="SELECT * from sanpham , loaisanpham, danhmuc, hinhanh,khuyenmai
             WHERE sanpham.trangThai = 1 
             		and loaisanpham.MaDM = danhmuc.MaDM 
                    and khuyenmai.MaKM = sanpham.MaKM 
             		and sanpham.MaLSP = loaisanpham.MaLSP 
             		and loaisanpham.MaDM = '$danhmuc' 
                    AND sanpham.MaSP = hinhanh.masp
                    GROUP by sanpham.MaSP
         		    ORDER BY ThoiGian DESC";
            require("result.php");
            return $data;  
        }
        function sanpham_khuyenmai() {
            $query = "SELECT * FROM khuyenmai, sanpham,hinhanh WHERE khuyenmai.MaKM = sanpham.MaKM and khuyenmai.GiaTriKM != 0 AND sanpham.MaSP = hinhanh.masp
            GROUP by sanpham.MaSP";
            // echo $query;
            require("result.php");
            return $data;
        }

        public function sanpham_km($masp)
        {
            $query ="SELECT * from sanpham,hinhanh,khuyenmai where sanpham.MaSP = hinhanh.masp and khuyenmai.MaKM = sanpham.MaKM and sanpham.MaSP = '$masp'";
            require("result.php");
            return $data;
        }

        public function sanpham($masp)
        {
            $query ="SELECT * from sanpham,hinhanh,danhmuc,loaisanpham
            where sanpham.MaSP = hinhanh.masp and sanpham.MaLSP = loaisanpham.MaLSP and loaisanpham.MaDM = danhmuc.MaDM and sanpham.MaSP = '$masp'";
            require("result.php");
            return $data;
        }

        public function clicksanpham($masp)
        {
            $query ="UPDATE sanpham SET Click=Click+1 where MASP = '$masp'";
            $result = $this->conn->query($query);
        }

        
        function sanphamnoibat($id)
        {
            $query = "SELECT * from sanpham , loaisanpham, danhmuc, hinhanh,khuyenmai
            WHERE sanpham.trangThai = 1 
                    and loaisanpham.MaDM = danhmuc.MaDM 
                   and khuyenmai.MaKM = sanpham.MaKM 
                    and sanpham.MaLSP = loaisanpham.MaLSP 
                    and loaisanpham.MaDM = loaisanpham.MaDM 
                   AND sanpham.MaSP = hinhanh.masp
                   GROUP by sanpham.MaSP
                    ORDER BY Click DESC limit $id";
            require("result.php");
            
            return $data;
        }

        function searchData($key) {
            $query = "SELECT * FROM sanpham, hinhanh WHERE sanpham.MaSP = hinhanh.masp and TenSP LIKE '$key%' GROUP by sanpham.MaSP";
            require("result.php");
            return $data;
        }

        function getBanner() {
            $query = "SELECT * FROM banner";
            require("result.php");
            return $data;
        }
        function getTenLoaiSP($malsp) {
            $query = "SELECT * from loaisanpham where MaLSP = $malsp";
            require("result.php");
            return $data;
        }
        function getChiTietSanPham($malsp,$a,$b) {
            $query = "SELECT * from sanpham,loaisanpham,hinhanh,khuyenmai,danhmuc
            WHERE sanpham.MaLSP = loaisanpham.MaLSP 
                and khuyenmai.MaKM = sanpham.MaKM 
                and hinhanh.masp = sanpham.MaSP 
                and danhmuc.maDM = loaisanpham.maDM 
                and loaisanpham.MaLSP = $malsp
                GROUP by sanpham.MaSP limit $a,$b";
            // echo $query;
            require("result.php");
            return $data;
        }
        function count_chitietLoai($malsp) {
            $query = "SELECT * from sanpham,loaisanpham,hinhanh,khuyenmai,danhmuc
            WHERE sanpham.MaLSP = loaisanpham.MaLSP 
                and khuyenmai.MaKM = sanpham.MaKM 
                and hinhanh.masp = sanpham.MaSP 
                and danhmuc.maDM = loaisanpham.maDM 
                and loaisanpham.MaLSP = $malsp
                GROUP by sanpham.MaSP";
            // echo $query;
            require("result.php");
            return $data;
        }

         function getEvalute($MaSP){
             $query = "SELECT  rate.*, nguoidung.Ho, nguoidung.ten ,DATE_FORMAT(rate.ngayDanhGia, '%d-%m-%Y')
             as ngay  FROM  sanpham as sp , danhgia as rate, nguoidung WHERE  
             sp.MaSP = rate.MaSP and rate.MaND = nguoidung.MaND and sp.MaSP = '$MaSP'";
            require("result.php");
            return $data;
         }

    }
?>