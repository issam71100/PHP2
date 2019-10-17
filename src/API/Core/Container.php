<?php

namespace App\API\Core;

use App\API\Controller\HomepageController;
use App\API\Controller\NotFoundController;

class Container
{
	private $services = [];
	public function get(string $idService)
	{
		$this->services = [
			'controller.homepage' => function() { return new HomepageController();},
			'controller.not.found' => function() { return new NotFoundController();},
			'core.dotenv' => function() { return new DotEnv();},
			'core.database' => function() { return new Database($this->services['core.dotenv']());},
		];
		
		return $this->services[$idService]();
	}
}