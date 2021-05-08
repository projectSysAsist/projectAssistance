<?php 
	
	//Retorna la url del proyecto
	function base_url()
	{
		return BASE_URL;
	}
	
	//Retorna la url de Assets
	function media()
	{
		return BASE_URL."/Assets";
	}


	//cargar archivos 
	function headerAdmin($data="")
	{
		$view_header = "Views/Templete/header_admin.php";
		require_once($view_header);
	}
	function footerAdmin($data="")
	{
		$view_footer = "Views/Templete/footer_admin.php";
		require_once($view_footer);
	}


	//Muestra información formateada
	function dep($data)
	{
		$format = print_r('<pre>');
		$format .= print_r($data);
		$format .= print_r('</pre>');

		return $format;
	}
	function getModal(string $nameModal, $data)
	{
		$view_modal ="Views/Templete/Modals/{$nameModal}.php";
		require_once $view_modal;
	}

	//Elimina exceso de espacios entre palabras

	function strClean(string $string)//pendiente
	{
		//$strClean = preg_replace('/\s+/', '/\s+/', subject);
		$strClean = trim($string);//Elimina las
		$strClean = stripslashes($string);//
		$strClean = str_ireplace("<script>","",$string);
		$strClean = str_ireplace("<script>","",$string);
		$strClean = str_ireplace("<script src>",
			"",$string);
		$strClean = str_ireplace("<script type=>","",$string);
		$strClean = str_ireplace("SELECT * FROM", "", $string);
		$strClean = str_ireplace("DELETE FROM","",$string);
		$strClean = str_ireplace("INSERT INTO","",$string);
		$strClean = str_ireplace("SELECT COUNT (*)FORM","",$string);
		$strClean = str_ireplace("DROP TABLE","",$string);
		$strClean = str_ireplace("OR '1'= '1","",$string);
		$strClean = str_ireplace('OR "1"= "1"',"",$string);
		$strClean = str_ireplace('OR ´1´= ´1´',"",$string);
		$strClean = str_ireplace("is NULL; --","",$string);
		$strClean = str_ireplace("is NULL; --","",$string);
		$strClean = str_ireplace("LIKE'","",$string);
		$strClean = str_ireplace('LIKE"',"",$string);
		$strClean = str_ireplace("LIKE ´","",$string);
		$strClean = str_ireplace("OR 'a'='a","",$string);
		$strClean = str_ireplace('OR "a"="a',"",$string);
		$strClean = str_ireplace("OR ´a´=´a","",$string);
		$strClean = str_ireplace("OR ´a´=´a","",$string);
		$strClean = str_ireplace("--","",$string);
		$strClean = str_ireplace("^","",$string);
		$strClean = str_ireplace("[","",$string);
		$strClean = str_ireplace("]","",$string);
		$strClean = str_ireplace("==","",$string);
		return $strClean;


	}
	function passGenerator($length = 10)
	{
		$pass = "";
		$longitudPass=$length;
		$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
		$longitudCadena = strlen($cadena);

		for ($i=1; $i <= $longitudPass; $i++) { 
			$pos = rand(0,$longitudCadena-1);
			$pass .= substr($cadena,$pos,1); 
		}
		return $pass;

	}
	function token()
	{
		$r1 = bin2hex(random_bytes(10));
		$r2 = bin2hex(random_bytes(10));
		$r3 = bin2hex(random_bytes(10));
		$r4 = bin2hex(random_bytes(10));
		$token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
	


	}


 ?>