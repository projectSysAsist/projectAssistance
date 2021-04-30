<?php
class Controllers 
{
    public function __construct(){
        $this->views = new Views();
        $this->loadModel();
        
    }

    public function loadModel()
    {
        //HomeModel.php
        $model = get_Class($this)."Model";
        $routClass = "Models/".$model.".php";
        if (file_exists($routClass))
        {
            require_once($routClass);
            $this->model = new $model();
        }
    }
}
?>