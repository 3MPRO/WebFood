<?php 
require_once("connection.php");
class Model
{
    var $conn;
    var $table;
    var $contens;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function all(){
        $query = "select * from $this->table ORDER BY $this->contens ASC";
        echo $query;
        require("result.php");
        return $data;
   }

}
?>  