<?php

namespace oliamerica;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model	
{
	function __construct($data){
		$this->contenido = $data["descripcion"];
        $this->titulo = $data["titulo"];
        $this->imagen = $data["nombreArchivo"];
        $this->autor = "sochoa";
        $this->lenguaje = "es";
	}
}
