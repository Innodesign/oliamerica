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


$app->render('header.php');

$app->run();

$app->render('footer.php');
