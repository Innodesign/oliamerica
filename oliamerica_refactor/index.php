<?php
session_cache_limiter(false);
session_start();

require 'Slim/Slim.php';

require 'app/lang/Lang.php';

\Slim\Slim::registerAutoloader();


$opciones = array(
	'templates.path' => 'views'
);

$app = new \Slim\Slim($opciones);

$app->get("/", function() use ($app){
	$app->render('index.php');
})->name("index");

$app->get("/espaniol", function() use ($app){
	Lang::establecerLenguaje("es");
	$app->response->redirect($app->urlFor("index"));
});

$app->get("/ingles", function() use ($app){
	Lang::establecerLenguaje("en");
	$app->response->redirect($app->urlFor("index"));
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
