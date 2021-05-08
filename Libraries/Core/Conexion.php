<?php 

	class Conexion
	{	
		private $conect;
		
		public function __construct(){
			$connectionString = "mysql:host=".DB_HOST.";dbname=".nombrerol, descripcion, status;

            try {
                $this->conect = new PDO($connectionString,DB_USER,DB_PASSWORD);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

            } catch (Excepcion $e) {
                $this->conect='Error de conexión';
                echo "ERROR: ".$e->getMessage();
			
			}
		}
		public	function conect()
		{
			return $this->conect;
		}
		

	}
 ?>