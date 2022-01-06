<?php

require_once("model.php");
class EvaluateModel extends Model
{
    var $table = "danhgia";
    function store($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO $this->table($f) VALUES ($v);";

        $status = $this->conn->query($query);

        if ($status == true) {
            return true;
        } else {
            return false;
        }
    }
    function update($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");


        $query = "UPDATE DanhGia SET  $v   WHERE MaHD =  '$data[MaHD]' and MaND =  '$data[MaND]' and MaSP =  '$data[MaSP]' ;";

        $result = $this->conn->query($query);

        if ($result == true) {
            return true;
        } else {
            return $query;
        }
    }
    public function sanpham($masp)
    {
        $query = "SELECT * from sanpham,hinhanh,danhmuc,loaisanpham
            where sanpham.MaSP = hinhanh.masp and sanpham.MaLSP = loaisanpham.MaLSP and loaisanpham.MaDM = danhmuc.MaDM and sanpham.MaSP = '$masp'";
        require("result.php");
        return $data;
    }
    function getEvalute($MaSP)
    {
        $query = "SELECT  rate.*, nguoidung.Ho, nguoidung.ten ,DATE_FORMAT(rate.ngayDanhGia, '%d-%m-%Y')
            as ngay  FROM  sanpham as sp , danhgia as rate, nguoidung WHERE  
            sp.MaSP = rate.MaSP and rate.MaND = nguoidung.MaND and sp.MaSP = '$MaSP'";
        require("result.php");
        return $data;
    }
}
