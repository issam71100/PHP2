<?php

namespace App\Front\Controller;

abstract class AbstractController
{
	protected function render(string $view, array $uriVars = []): void
	{
		extract($uriVars);
		
		require_once __DIR__ . "/../../../templates/$view.php";
	}
}