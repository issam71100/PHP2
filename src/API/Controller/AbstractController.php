<?php

namespace App\API\Controller;

abstract class AbstractController
{
	protected function render(array $data = [], int $statusCode = 200): void
	{
		
		header('Content-Type: application/json');
		header('Access-control-Allow-Origin: *');
		header('Access-control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
		header('Issam: The best ');
		
		http_response_code(200);
		echo json_encode([
			'data'=> $data,
			'status' => $statusCode
		]);
	}
}