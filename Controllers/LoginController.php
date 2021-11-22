<?php
require_once("./Models/model.php");
    class LoginController {
        var $Cate_model;
        public function __construct()
        {
             $this->Cate_model = new model();
            
        }
        function list()
        {
    
    
            require_once('./Views/indexview.php');
            
        }

    }
       
      
    
?>
