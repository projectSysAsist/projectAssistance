<?php

class Usuarios extends Controllers{

  public function __construct()
  {
    echo "((((soy el home))))";
    parent:: __construct();
  }

  public function Usuarios ()
  {
    $data['page_tag'] = "Usuarios";
    $data['page_title'] = "Usuarios <small>Tienda virtal</small>";
    $data['page_name'] = "usuarios";
    
    $this->views->getView($this,"usuarios",$data);
      
  }
  

}
 ?>