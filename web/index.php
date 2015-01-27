<?php

use Application\Provider\ControllerServiceProvider;
use Symfony\Component\HttpFoundation\Response;

$app = require '../app/app.php';
$ControllerServiceProvider = new ControllerServiceProvider();
$app
	->register($ControllerServiceProvider)
	->mount('/', $ControllerServiceProvider);
$app
	->error(function(\Exception $e, $code){
		return new Response('We are sorry, but something went terribly wrong.');
	});

$app->run();