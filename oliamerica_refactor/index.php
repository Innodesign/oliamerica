<?php

require 'Slim/Slim.php';

require 'app/lang/Lang.php';

\Slim\Slim::registerAutoloader();


$opciones = array(
	'templates.path' => 'views'
);

$app = new \Slim\Slim($opciones);

$app->get("/", function() use ($app){
	$app->render('index.php');
});

$app->get("/Nosotros", function() use ($app){
	$app->render('nosotros.php');
});

$app->get("/Productos", function() use ($app){
	$app->render('productos.php');
});

$app->get("/Politicas", function() use ($app){
	$app->render('politicas.php');
});

$app->get("/Noticias", function() use ($app){
	$app->render('noticias.php');
});

$app->get("/Contacto", function() use ($app){
	$app->render('contacto.php');
});

$app->render('header.php');

$app->run();

$app->render('footer.php');
