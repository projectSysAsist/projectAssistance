<?php
class Controllers 
{
    public function __construct()

    {
        $this->views = new views();
        $this->loadModel();
        
    }

    public function loadModel()
    {
        //HomeModel.php
        $model = get_Class($this)."Model";
        $routClass = "Models/".$model.".php";
        if (file_exists($routClass))
        {
            require_once("Models/HomeModel.php");
            $this->model = new $model();
        }
        
    }

}




 ?>