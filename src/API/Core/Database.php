<?php
/**
 * Created by PhpStorm.
 * User: kaihatsu-sha
 * Date: 16/10/2019
 * Time: 15:59
 */

namespace App\API\Core;


use PDO;

class Database
{
	private $connection;
	
	private $dotenv;
	
	
	public function __construct(DotEnv $dotEnv)
	{
		$this->dotenv = $dotEnv;
		
		$this->connection = new PDO(
			"mysql:host={$this->dotenv->get('db_host')};dbname={$this->dotenv->get('db_name')};charset=utf8",
			$this->dotenv->get('db_user'),
			$this->dotenv->get('db_pwd'),
			[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			]
		);
	}
	
	public function connect(): PDO
	{
		return $this->connection;
	}
}