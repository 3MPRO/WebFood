<?php
require_once("model.php");
class PayModel extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * from sanpham, hinhanh where sanpham.MaSP = $id and sanpham.masp = hinhanh.masp GROUP by sanpham.MaSP";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    function getProvince() {
        $query = "SELECT * FROM province";
        require("result.php");
        return $data;
    }
    function getCity($id, $nameTable) {
        $query = "SELECT name FROM {$nameTable} WHERE {$nameTable}id = '{$id}'";
        echo $query;
        require("result.php");
        return $data;
    }

    function getAddressDefault($MaND) {
        $query = "SELECT DiaChi FROM nguoidung where MaND = '$MaND'";
        require("result.php");
        return $data;
    }

    function save($data){
        print_r($data);
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO HoaDon($f) VALUES ($v);";
        $status = $this->conn->query($query);
        echo 'day la'.$status;
        // $queryUpdate = "UPDATE HoaDon SET TongTien = TongTien + 25000";
        // $this->conn->query($queryUpdate);
        $query_mahd = "select MaHD from hoadon ORDER BY NgayLap DESC LIMIT 1";
        $data_mahd = $this->conn->query($query_mahd)->fetch_assoc();
        foreach ($_SESSION['product'] as $value) {
            print_r($value);
            $MaSP =$value['MaSP'];
            $SoLuong = $value['soluong'];
            $DonGia = $value['DonGia'];
            $MaHD = $data_mahd['MaHD'];
            $query_ct = "INSERT INTO chitiethoadon(MaHD,MaSP,SoLuong,DonGia) VALUES ($MaHD,$MaSP,$SoLuong,$DonGia)";
            $status_ct = $this->conn->query($query_ct);
            $query_update_soLuong = "UPDATE sanpham SET SoLuong = SoLuong - $SoLuong WHERE MaSP = $MaSP";
            $status_update = $this->conn->query($query_update_soLuong);

            echo $status_ct;
        }
        if ($status == true and $status_ct = true) {
            // unset($_SESSION['product']);
            setcookie('msg', 'Đăng ký thành công', time() + 2);
            header('location: ?act=pay&xuli=order_complete');
        } else {
            setcookie('msg', 'Đăng ký không thành công', time() + 2);
            header('location: ?act=pay');
        }
      }

}