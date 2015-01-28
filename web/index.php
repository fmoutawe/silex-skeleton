<?php

use Application\Provider\ControllerServiceProvider;
use Symfony\Component\HttpFoundation\Response;

$app = require '../app/app.php';
$ControllerServiceProvider = new ControllerServiceProvider();
$app
	->register($ControllerServiceProvider)
	->mount('/', $ControllerServiceProvider);
$app
	->error(function(\Exception $e, $code) use ($app){
		$message = '';

		switch ($code) {
			case 404:
				$message .= 'The requested page is not found.';
				break;
			case 501:
				$message .= 'The server encountered a temporary error and could not complete your request.';
				break;
		}

		return $app['twig']->render('error.html.twig', ['code' => $code, 'message' => $message]);
	});

$app->run();