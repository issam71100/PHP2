<?php

namespace App\API\Core;

use App\API\Controller\HomepageController;

class Container
{
	public function get(string $idService)
	{
		$service = [
			'controller.homepage' => function() { return new HomepageController(); }
		];
		
		return $service[$idService]();
	}
}