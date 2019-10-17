<?php

namespace App\Front\Core;

use App\Front\Controller\HomepageController;
use App\Front\Controller\NotFoundController;

class Container
{
	public function get(string $idService)
	{
		$service = [
			'controller.homepage' => function() { return new HomepageController();},
			'controller.not.found' => function() { return new NotFoundController();}
		];
		
		return $service[$idService]();
	}
}