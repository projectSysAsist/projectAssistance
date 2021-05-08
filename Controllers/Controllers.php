<?php 
    class Controllers
    {
        public function __construct(){
            $this->loadmodel();
        }
        public function loadmodel(){
            $model = get_class($this)."Model";
            $routclass = "Models/".$model.".php";
            if(file_exists($routclass)){
                requiere_once($routclass);
                $this->model = new $model();
            }
        }
    }
?>