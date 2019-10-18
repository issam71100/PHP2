<?php

namespace App\API\Core;

use App\API\Controller\CountryController;
use App\API\Controller\HomepageController;
use App\API\Controller\NotFoundController;
use App\API\Repository\CityRepository;
use App\API\Repository\CountryRepository;

class Container
{
	private $services = [];
	public function get(string $idService)
	{
		$this->services = [
			'controller.homepage' => function() { return new HomepageController($this->services['repository.city']());},
			'controller.not.found' => function() { return new NotFoundController();},
			'controller.country' => function() { return new CountryController($this->services['repository.country']());},
			'core.dotenv' => function() { return new DotEnv();},
			'core.database' => function() { return new Database($this->services['core.dotenv']());},
			'repository.city' => function() { return new CityRepository($this->services['core.database']());},
			'repository.country' => function() { return new CountryRepository($this->services['core.database']());},
		];
		
		return $this->services[$idService]();
	}
}