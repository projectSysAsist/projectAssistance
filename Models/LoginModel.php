<?php
class LoginModel extends Mysql
{ 
  private $intIdUsuario;
  private $strUsuario;
  private $strPassword;
  private $strToken;	
  public function __construct()
  {
    parent::__construct();
    
  }

  public function loginUser(string $usuario, string $password )
  {
  	$this->strUsuario = $usuario;
  	$this->strPassword = $password;
    $sql = "SELECT idpersona,status FROM persona WHERE email_user = '$this->strUsuario' and password = '$this->strPassword' and status != 0 ";
  
  	$request = $this->select($sql);
  	return $request;

  }
  public function session_Login(int $iduser){
    $this->intIdUsuario = $iduser;
    $sql ="SELECT p.idpersona,
                  p.identificacion,
                  p.nombres,
                  p.apellidos,
                  p.telefonos,
                  p.email_user,
                  p.nit,
                  p.nombrefiscal,
                  r.idrol,r.nombrerol,
                  p.status
                  FROM persona p
                  INNER JOIN rol r
                  ON p.rolid = r.idrol
                  WHERE p.rolid = $this->intIdUsuarios";
                  $request =  $this->select($sql);
                  return $request;
    
  }

}

 ?>