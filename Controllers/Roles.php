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
  public function getRoles()
  {
    $arrData = $this->model->selectRoles();

    for ($i=0; $i <count($arrData) ; $i++) { 
      if ($arrData[$i]['status'] == 1) {
        $arrData[$i]['status'] ='<span class="badge badge-success">Activo</span>';
      }else{
        $arrData[$i]['status'] ='<span class="badge badge-danger">Inactivo</span>';
      }
      $arrData[$i]['Options'] = '<div class="text-centeer">
      <button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['idrol'].'" title= "Permisos"><i class="fas fa-key"></i></button>

      <button class="btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['idrol'].'" title="Editar"><i class="fas fa-pencil-alt"></i></button>

      <button class="btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['idrol'].'" title="Eliminar"><i class="fas fa-trash-alt" ></i></button>
                                </div>';
    }
    echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
    die();
  }


public function getRol(int $idrol)
  {
      $intIdrol = intval(strClean($idrol));
      if($intIdrol > 0)
      {
          $arrData = $this->model->selectRol($intIdrol);
          if(empty($arrData))
          {
              $arrResponse = array('status' => false, 'msg' => 'Datos no encontrados');
          }else{
              $arrResponse = array('status' => true, 'data' => $arrData);
          }
          echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
      }
      die();
  }

  public function setRol(){
    
    $intIdrol = intval($_POST['idRol']);
    $strRol= strClean($_POST['txtNombre']);
    $strDescripcion = strClean($_POST['txtDescripcion']);
    $intStatus = intval($_POST['listStatus']);
    //$request_rol = $this->model->insertRol($strRol, $strDescripcion, $intStatus);
    


    if($intIdrol == 0){
      //crear
      $request_rol = $this->model->insertRol($strRol, $strDescripcion, $intStatus);
      $Option = 1;

    }else{
      //Actualizar
      $request_rol = $this->model->updateRol($intIdrol, $strRol, $strDescripcion, $intStatus);
      $Option = 2;

    }
    

    if ($request_rol){ 

      if ($Option == 1){

        $arrResponse= array('status'=>true, 'msg' =>'Datos guardados correactamente.');

      }else{

        $arrResponse= array('status'=>true, 'msg' =>'Datos Actualizados correactamente.');
      }

    }
    else if ($request_rol == 'exist')
    {
      $arrResponse = array('status'=>false, 'msg'=>'Atencion el rol ya existe.');

    }else{
      $arrResponse=array('status'=> false, "msg" => 'No es posible almacenar los datos.');
    }
    echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    die();

    }

    public function delRol (){
      if ($_POST) {
        $intIdrol = intval($_POST['idrol']);
        $requestDelete= $this->model->deleteRol($intIdrol);
        if ($requestDelete == 'ok') {
          $arrResponse = array('status' => true, 'msg' => 'se ha eliminado el Rol');
        } else if ($requestDelete == 'exist') {
          $arrResponse = array('status' => false, 'msg' => 'No es posible eliminar un Rol asociado a usuarios.');
        }else{
          $arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Rol.');
        }
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
      }
    die();
    }
  }
 ?>