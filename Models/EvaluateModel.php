<?php

        require_once("model.php");
        class EvaluateModel extends Model
        {
            var $table = "danhgia";
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
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('msg', $query, time() + 2);
            header('Location: ?mod=' . $this->table . '&act=add');
        }
        }
    }
        

       
    
    
?>
