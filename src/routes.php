<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/home/[{name}]', 'Src\Controllers\HomeController:home');

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
	$this->logger->info("Slim-Skeleton '/' route");

    // Render index view
	return $this->renderer->render($response, 'index.phtml', $args);
});

$app->group('/admin', function ()
{
	$this->group('/news', function ()
	{
		$this->get('/', 'Src\Controllers\HomeController:index');
		$this->post('/', 'Src\Controllers\HomeController:store');
		$this->get('/:id', 'Src\Controllers\HomeController:show');
		$this->put('/:id', 'Src\Controllers\HomeController:store');
		$this->delete('/:id', 'Src\Controllers\HomeController:home');

	});
	$this->get('/{name}', function (Request $request, Response $response, array $args) {
    // Sample log message
		$this->logger->info("Slim-Skeleton '/' route");

    // Render index view
		return $this->renderer->render($response, 'admin/index.php', $args);
	});
});

