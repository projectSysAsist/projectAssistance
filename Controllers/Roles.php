<?php

class Roles extends Controllers{

  public function __construct()
  {
    parent:: __construct();
  }

  public function Roles()
  {
    $data['page_id'] = 3;
    $data['page_tag'] = "Roles Usuario";
    $data['page_name'] = "roles_usuario";
    $data['page_title'] = "Roles Usuario <small> No falles, asiste.</small>";
    $this->views->getView($this,"roles",$data);
      
  }
  

}
 ?>