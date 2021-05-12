<?php

class Login extends Controllers{

  public function __construct()
  {
    session_start(); 
    if(isset($_SESSION['login']))
    {
      header('Location: '.base_url().'/dashboard');
    }
    parent:: __construct();
  }

  public function login()
  {
    $data['page_tag'] = "Login - No falles, asiste";
    $data['page_title'] = "Login - No falles, asiste";
    $data['page_name'] = "login";
    $data['page_functions_js'] = "functions_login.js";
    $this->views->getView($this,"login",$data);
      
  }

  public function loginUser(){
    //dep($_POST);
    if ($_POST) {
      if(empty($_POST['txtEmail']) || empty($_POST['txtPassword'])){
        $arrResponse = array('status' => false, 'msg' => 'Error de datos.' );
      }else{
        $strUsuario  = strtolower(strClean($_POST['txtEmail']));
        $strPassword = hash("SHA256", $_POST['txtPassword']); 
        $requestUser = $this->model->loginUser($strUsuario, $strPassword);
        if (empty($requestUser)){
          $arrResponse = array('status' => false, 'msg' => 'El usuario o la contraseña es incorrecto.' ); 
        }else{
          $arrData = $requestUser;
          if ($arrData['status'] == 1){
            $_SESSION['idUser'] = $arrData['idpersona'];
            $_SESSION['login'] = true;

            $arrData = $this->model->sessionlogin($_SESSION['idUser']);
            $_SESSION['userData'] = $arrData;

            $arrResponse = array('status' => true, 'msg' => 'Ok.' );
          }else{
            $arrResponse = array('status' => false, 'msg' => 'Usuario inactivo.'); 
          }
        }
      }
      echo json_decode($arrResponse,JSON_UNESCAPED_UNICODE);
     
    }
    die();
  }
  

}
 ?>