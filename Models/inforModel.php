<?php 
 require_once("model.php");
 class inforModel extends model{

   
   public function infor($maND){
        $query = "SELECT *from nguoidung where MaND = $maND";
        require("result.php");
        return $data;
    }
}
?>