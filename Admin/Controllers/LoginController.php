<?php 
    require_once("./Models/login.php");
    class LoginController {
        var $login_model;
        public function __construct()
        {
            $this->login_model = new login();
        }

        public function admin()
        {
            $data_hd = $this->login_model->tk_thongbao();

            $data_hd_cd = $this->login_model->tk_thongbao_dd();

            $m = date("m");

            $data_countM = $this->login_model->tk_dtthang($m);

            $y = "20".date("y");

            $data_countY = $this->login_model->tk_dtnam($y);

            $data_nguoidung = $this->login_model->tk_nguoidung(1);

            $data_nhanvien = $this->login_model->tk_nguoidung(3);
            require_once("./Views/indexAD.php");
        }
    }
?>