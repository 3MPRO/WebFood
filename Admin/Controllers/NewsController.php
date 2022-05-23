<?php
require_once("./Models/newsModel.php");
class NewsController
{
	var $news_model;
	function __construct()
	{
		$this->news_model = new newsModel();
	}

	public function list()
	{
		$data = array();
		$data = $this->news_model->all(); 
        // print_r($data);
		require_once("./Views/indexAD.php");
	}
    public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->news_model->find($id);
        // print_r($data);
		require_once("./Views/indexAD.php");
	}
    public function store()
    {
        $data_news = array(
            'idTinTuc' => 'null',
            'TieuDe' =>    $_POST['tieude'],
            'trichdan'  =>   $_POST['trichdan'],
            'hinhanh' => $_POST['hinhanh'],
            'ngayDang' => $_POST['ngaydang'],
            'NoiDung' => $_POST['noidung']
        );
        $this->news_model->store($data_news);
    }
}
