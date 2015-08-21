<?php


class Lang {

	static $lenguaje = 'es';

	public static function get($nombreVariable){
		$array = self::obtenerDataArchivo($nombreVariable);
		$arrayNombreVariable = explode('.', $nombreVariable);
		return $array[$arrayNombreVariable[1]];
	}

	private static function obtenerDataArchivo($nombreVariable){
		$nombreArchivo = explode('.', $nombreVariable);
		return include self::$lenguaje . '/' . $nombreArchivo[0] . '.php';
	}
}