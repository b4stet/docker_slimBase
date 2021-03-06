<?php

namespace SlimBase\Actions;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


class ResourcesListGetAction extends AbstractAction{

	public function doGetListResources(Request $request, Response $response){
		return $this->service['view']->render($response, "resourcesList.html");
	}
}