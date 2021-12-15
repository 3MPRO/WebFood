<?php
require_once("model.php");
class favoriteModel extends Model
{
    function allProduct()
    {
        $query =  "SELECT * from sanpham, hinhanh where sanpham.masp = hinhanh.masp GROUP by sanpham.MaSP";
        require("result.php");
        return $data;
    }
}