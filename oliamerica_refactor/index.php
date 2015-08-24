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
	$rutaIndex = $app->urlFor("index");
	$app->redirect("/oliamerica");
});

$app->get("/ingles", function() use ($app){
	Lang::establecerLenguaje("en");
	$app->redirect($app->urlFor("index"));
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
	require 'app/data/conexion.php';
	require 'app/models/Noticia.php';

	$noticias = Noticia::find('all');

	$app->render('noticias.php', array('noticias' => $noticias));
});

$app->get("/Contacto", function() use ($app){
	$app->render('contacto.php');
});

$app->render('header.php', array('baseUrl' => $app->urlFor("index")));

$app->run();

$app->render('footer.php');
