<?php

namespace SlimBase\ServiceProviders;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Exception;

class DefaultErrorHandler extends AbstractErrorHandler{
	public function __invoke(Request $request, Response $response, Exception $exception) {
		$this->logger->error(
			"Error 500. ". $exception->getMessage() . " in" . $exception->getFile() . ":" . $exception->getLine(),
			$this->getContext($request)
			);

    	return $response
        	->withStatus(500)
        	->withHeader('Content-Type', 'text/html')
        	->write('Error 500 - Something went wrong! - <a href="/index.php">back to index</a>');
   		}
}