<?php
require_once("model.php");
class newsModel extends Model
{
    function getChiTietTin($id){
        $query = "SELECT * from tintuc where idTinTuc = $id";
        require("result.php");
        return $data;
    }
}