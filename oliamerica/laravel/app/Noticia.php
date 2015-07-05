<?php

namespace oliamerica;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model	
{   
    private function _construct(){
        
    }

    public static function iniciar(){
        $noticia = new Noticia();

        $noticia->contenido = "";
        $noticia->titulo = "";
        $noticia->estado = "";
        $noticia->autor = "";
        $noticia->lenguaje = "es";

        return $noticia;
    }

    public static function crear($data){
        $noticia = new Noticia();

        $noticia->contenido = rtrim($data["contenido"]);
        $noticia->titulo = $data["titulo"];
        $noticia->estado = $data["estado"];
        $noticia->autor = "sochoa";
        $noticia->lenguaje = $data["lenguaje"];
        
        return $noticia;
    }

    public function editar($data){
    	$this->contenido = rtrim($data["contenido"]);
        $this->titulo = $data["titulo"];
        $this->estado = $data["estado"];
        $this->autor = "sochoa";
        $this->lenguaje = $data["lenguaje"];
    }
}


