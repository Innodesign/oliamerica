<?php


class Lang {

	public static function get($nombreVariable){
		$array = self::obtenerDataArchivo($nombreVariable);
		$arrayNombreVariable = explode('.', $nombreVariable);
		return $array[$arrayNombreVariable[1]];
	}

	public static function establecerLenguaje($lenguaje){
		$_SESSION["lenguaje"] = $lenguaje;
	}

	private static function obtenerLenguaje(){
		if(isset($_SESSION["lenguaje"])){
			return $_SESSION["lenguaje"];
		}
		return "es";
	}

	private static function obtenerDataArchivo($nombreVariable){
		$nombreArchivo = explode('.', $nombreVariable);
		return include self::obtenerLenguaje() . '/' . $nombreArchivo[0] . '.php';
	}
}