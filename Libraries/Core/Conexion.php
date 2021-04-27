<?php 

	class Conexion
	{	
		private $conect;
		
		public function __construct(){
			$connectionString = "mysql:host".$this->host.";dbname".$this->db.";charset-utf8";
            try {
                $this->conect = new PDO($connectionString,$this->user,$this->password);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Excepcion $e) {
                $this->conect='Error de conexión';
                echo "ERROR: ".$e->getMessage();
			
			}
			public function conect()
			{
				return $this->conect;
			}
		}

	}
 ?>