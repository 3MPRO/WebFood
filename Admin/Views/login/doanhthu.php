<?php

//data.php

$connect = new PDO("mysql:host=localhost;dbname=webfood", "root", "");

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch')
	{
		$year = $_POST['selectedYear'];
		$data_list = array();
		for($i = 1 ; $i<=12 ;$i++) {
            $query = "
            SELECT MONTH(NgayLap) as MONTH,SUM(TongTien) as Count FROM HoaDon WHERE MONTH(NgayLap) = $i And YEAR(NgayLap)= $year and TrangThai = 1
            ";
			$result = $connect->query($query);
			$data = array();

			foreach($result as $row)
			{
				$data[] = array(
					'total'			=>	$row["Count"],
					'month'			=>	$row["MONTH"]
				);
			}
			array_push($data_list, $data);
		}
		echo json_encode($data_list);
	}
}


?>