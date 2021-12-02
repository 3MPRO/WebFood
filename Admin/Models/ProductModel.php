<?php 
    require_once("model.php");
    class product extends model{
        var $table = "sanpham";
        var $contens = "MaSP";
    function khuyenmai(){
            $query = "select * from khuyenmai ";
            require("result.php");
            return $data;
        }
    function loaisp(){
        $query = "select * from loaisanpham ";
        require("result.php");
        return $data;
    }
    function danhmuc(){
        $query = "select * from danhmuc";
        require("result.php");
        return $data;
    }
    function getImgById($idsp){
        $query = "select *from hinhanh where masp = $idsp";
        require("result.php");
        return $data;
    }
    function getSanPhamById($idsp){
        $query = "select sanpham.*, danhmuc.MaDM  from sanpham, danhmuc, loaisanpham  where sanpham.masp = $idsp and sanpham.maLSP = loaisanpham.maLSP and loaisanpham.madm = danhmuc.madm " ;
        return $this->conn->query($query)->fetch_assoc();
    }
    function getIdProductnew(){
        $query = "select MaSP from sanpham
        ORDER BY ThoiGian DESC limit 1";
        $result = $this->conn->query($query);
        $row = mysqli_fetch_assoc($result);
      
        $id =$row['MaSP'];
        setcookie('idsp', 'Lấy id thành công'.$id, time() + 2);
       
        return $id;

    }

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
            setcookie('msg', 'Thêm mới thành công', time() + 2);
          header('Location: ?mod=' . $this->table . '&act=add');
        } else {
            setcookie('msg', 'Thêm mới thất bại', time() + 2);
        header('Location: ?mod=' . $this->table . '&act=add');
        }
    }
    function updateProduct($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");

        $query = "UPDATE $this->table SET  $v   WHERE $this->contens = ".$data['MASP'];
        $result = $this->conn->query($query);
        
        if ($result == true) {
            setcookie('msg', 'Duyệt thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('msg', $query, time() + 2);
            header('Location: ?mod=' . $this->table . '&act=edit&id=' . $data['id']['id']);
        }
    }
    function updateImg($data_img, $idsp){
      
        foreach($data_img as $key => $value){
            $query = "UPDATE hinhanh set hinhanh = $value where masp = $idsp and tenhinh = $key;";
            $result = $this->conn->query($query);
        }
       
       
       
       // setcookie('idsp', 'chèn hình ảnh : '.$query, time() + 2);
    }
    function insertImg($data_img){
        $dat ="";
        $i =0;
        foreach($data_img as $key => $value){
            $i +=1;
            $key = rtrim($key, " ".$i);
            $dat .= "('null','$key','$value','hinhanh$i'),";
        }
        $dat = trim($dat, ",");
        $query = "INSERT INTO hinhanh VALUES $dat;";
        $result = $this->conn->query($query);
        setcookie('idsp', 'chèn hình ảnh : '.$query, time() + 2);
    }


    
}
?>