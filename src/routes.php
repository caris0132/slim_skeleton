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
		$this->get('/', 'Src\Controllers\NewsController:index');
		$this->post('/', 'Src\Controllers\NewsController:store');
		$this->get('/:id', 'Src\Controllers\NewsController:show');
		$this->put('/:id', 'Src\Controllers\NewsController:store');
		$this->delete('/:id', 'Src\Controllers\NewsController:home');

	});
	$this->get('/{name}', function (Request $request, Response $response, array $args) {
    // Sample log message
		$this->logger->info("Slim-Skeleton '/' route");

    // Render index view
		return $this->renderer->render($response, 'admin/index.php', $args);
	});
});

