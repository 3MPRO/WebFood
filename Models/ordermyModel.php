<?php
    require_once("model.php");
    class ordermyModel extends Model
    {
        function showHoaDon($maND) {
            $query = "SELECT * FROM hoadon where maND = $maND";
            require("result.php");
            return $data;
        }
        function showHoaDonChoXN($maND,$trangThai) {
            $query = "SELECT * FROM hoadon where maND = $maND and TrangThai = $trangThai";
            require("result.php");
            return $data;
        }
        function showHoaDonGiaoTC($maND,$trangThaiDH) {
            $query = "SELECT * FROM hoadon where maND = $maND and TrangThaiDH = $trangThaiDH";
            require("result.php");
            return $data;
        }

        function deleteHoaDon($maHD) {
            $query = "DELETE FROM hoadon WHERE hoadon.MaHD = $maHD";
            return $this->conn->query($query);
        }

        function orderDetail($maHD) {
            $query = "SELECT * FROM hoadon WHERE MaHD = $maHD";
            require("result.php");
            return $data;
        }

        function orderDetail_product($maHD) {
            $query = "select s.MaSP,ct.SoLuong,ct.DonGia, s.TenSP, hinhanh from chitiethoadon as ct, sanpham as s, hinhanh where ct.MaSP = s.MaSP and s.MaSP = hinhanh.masp and ct.MaHD = $maHD GROUP by s.MaSP";
            require("result.php");
            return $data;
        }

        function getImage($masp) {
            $query = "SELECT hinhanh FROM hinhanh";
            require("result.php");
            return $data;
        }

        function getDanhGiaSao($maHD){
            $query = "SELECT danhgia.SoSao,danhgia.MaSP
            FROM sanpham,danhgia,nguoidung,hoadon
            WHERE sanpham.MaSP = danhgia.MaSP AND nguoidung.MaND = danhgia.MaND and hoadon.MaHD = danhgia.MaHD and danhgia.MaHD = $maHD";
            // echo $query;
            require("result.php");
            return $data;
        }
    }
?>