<?php

namespace App\API\Core;


class Router
{
	private $routes = [
		'#^/$#' => [
			'controller' => 'controller.homepage',
			'method' => 'index',
		],
		
		'#^/countries$#' => [
			'controller' => 'controller.country',
			'method' => 'index',
		],
	];
	
	private $route = [
		'controller' => 'controller.not.found',
		'method' => 'index',
	];
	
	private $uriVars = [];
	
	/**
	 * @return array
	 */
	public function  getRoute():array{
		$uri = $_SERVER['REQUEST_URI'];
		
		foreach ($this->routes as $pattern => $params){
			if(preg_match($pattern, $uri,$this->uriVars)){
				$this->route = $this->routes[$pattern];
				break;
			}
		}
		
		return [
			'route' => $this->route,
			'uriVars' => $this->uriVars
		];
	}
	
}
