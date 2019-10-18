<?php

namespace App\Front\Core;

use App\API\Core\Database;
use App\API\Core\DotEnv;
use App\API\Repository\CityRepository;
use App\API\Repository\CountryRepository;
use App\Front\Controller\CountryController;
use App\Front\Controller\HomepageController;
use App\Front\Controller\NotFoundController;

class Container
{
	
	private $services;
	public function get(string $idService)
	{
		$this->services = [
			'core.dotenv' => function() { return new DotEnv();},
			'core.database' => function() { return new Database($this->services['core.dotenv']());},
			'controller.homepage' => function() { return new HomepageController();},
			'controller.not.found' => function() { return new NotFoundController();},
			'controller.country' => function() { return new CountryController(
				$this->services['repository.country'](),
				$this->services['repository.city']()
			);},
			'repository.country' => function() { return new CountryRepository($this->services['core.database']());},
			'repository.city' => function() { return new CityRepository($this->services['core.database']());},
		
		];
		
		return $this->services[$idService]();
	}
}