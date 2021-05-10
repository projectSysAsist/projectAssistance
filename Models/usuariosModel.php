<?php 

	class UsuariosModel extends Mysql
	{
		private $intIdUsuario;
		private $strNombre;
		private $strApellido;
		private $intTelefono;
		private $strEmail;

		public function __construct()
		{
			parent::__construct();
		}	

		public function insertUsuario(string $nombre, string $apellido, int $telefono, string $email){

			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$return = 0;
		
			$query_insert  = "INSERT INTO persona(nombres,apellidos,telefono,email) 
							  VALUES(?,?,?,?)";
        	$arrData = array($this->strNombre,
    						$this->strApellido,
    						$this->intTelefono,
    						$this->strEmail);
        	$request_insert = $this->insert($query_insert,$arrData);
        	$return = $request_insert;
	        return $return;
		}

		public function selectUsuarios()
		{
			$sql = "SELECT * FROM persona ";
					$request = $this->select_all($sql);
					return $request;
		}
		public function selectUsuario(int $idpersona){
			$this->intIdUsuario = $idpersona;
			$sql = "SELECT * FROM persona
					WHERE idpersona = $this->intIdUsuario";
			$request = $this->select($sql);
			return $request;
		}

		public function updateUsuario(int $idUsuario, string $nombre, string $apellido, int $telefono, string $email){

			$this->intIdUsuario = $idUsuario;
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			
			$sql = "UPDATE persona SET nombres=?, apellidos=?, telefono=?, email=? 
					WHERE idpersona = $this->intIdUsuario ";
			$arrData = array($this->strNombre,
    						$this->strApellido,
    						$this->intTelefono,
    						$this->strEmail);
			$request = $this->update($sql,$arrData);
			return $request;
		}
		public function deleteUsuario(int $intIdpersona)
		{
			$this->intIdUsuario = $intIdpersona;
			$sql = "DELETE FROM persona WHERE idpersona = $this->intIdUsuario ";
			$request = $this->delete($sql);
			return $request;
		}

	}
 ?>