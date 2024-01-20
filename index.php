<?php

# This file is a single point of entry that is responsible for routing (handling) the request to the appropriate controller.

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
	'/' => 'controllers/index.php',
	'/about' => 'controllers/about.php',
	'/contact' => 'controllers/contact.php'
];

function routeToControl($uri, $routes)
{
	if( array_key_exists($uri, $routes)){
		require $routes[$uri];
	} else {
		abort();
	}

}

function abort( $code = 404 ) {
	http_response_code( $code );
	require( "views/{$code}.view.php");
}

routeToControl($uri, $routes);