<?php 
 require_once("model.php");
 class inforModel extends model{
   public function infor($maND){
        $query = "SELECT *from nguoidung where MaND = $maND";
        require("result.php");
        return $data;
    }
    function updateInfor($data, $MaND){
      $v = "";
      foreach ($data as $key => $value) {
          $v .= $key . "='" . $value . "',";
      }
      $v = trim($v, ",");
     
      $query = "UPDATE NguoiDung SET $v  WHERE MaND = ". $_SESSION['login']['MaND'];
      echo $query;
      $result = $this->conn->query($query);
    }
}
?>