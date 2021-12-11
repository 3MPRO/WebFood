<?php
require_once("Models/PayModel.php");
require_once("Models/login.php");
class PayController
{
    var $pay_model;
    var $login_model;
    public function __construct()
    {
        $this->pay_model = new PayModel();
        $this->login_model = new Login();
    }
    function list_cart()
    {
        $data_danhmuc = $this->pay_model->danhmuc();
        $data = $this->pay_model->getProvince();
        require_once('Views/indexview.php');
    }
}