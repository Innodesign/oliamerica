<?php

namespace oliamerica\ViewModels;

class NoticiaViewModel {
	public $titulo;
	public $descripcion;
	public $rutaFormulario;
	public $lenguajes;
	public $estados;

	public function inicializarCrearViewModel(){
		$this->titulo = "Nueva Noticia";
		$this->descripcion = "Por favor, complete los siguientes campos para crear una nueva noticia.";
		$this->rutaFormulario = "/admin/noticia/guardar";

		$this->establecerLenguajes();
		$this->establecerEstados();
	}

	public function inicializarEditarViewModel($id){
		$this->titulo = "Editar Noticia";
		$this->descripcion = "Por favor, complete los siguientes campos para editar la noticia.";
		$this->rutaFormulario = "/admin/noticia/editar/" . $id;

		$this->establecerLenguajes();
		$this->establecerEstados();
	}

	private function establecerLenguajes(){
		$this->lenguajes = [
			"es" => "Español",
			"en" => "Ingles"
		];
	}

	private function establecerEstados(){
		$this->estados = [
			"a" => "Si",
			"i" => "No"
		];
	}
}

?>