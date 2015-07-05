<?php

namespace oliamerica;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model	
{
	function __construct($data){
		$this->contenido = $data["contenido"];
        $this->titulo = $data["titulo"];
        $this->autor = "sochoa";
        $this->lenguaje = "es";
	}
}
