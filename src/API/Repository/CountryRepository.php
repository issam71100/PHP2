<?php
/**
 * Created by PhpStorm.
 * User: kaihatsu-sha
 * Date: 18/10/2019
 * Time: 13:56
 */

namespace App\API\Repository;


use App\API\Core\Database;
use PDO;

class CountryRepository
{
	private $database;
	private $connection;
	
	public function __construct(Database $database)
	{
		$this->database = $database;
		$this->connection = $this->database->connect();
		
	}
	
	public function findAll(){
		$sql = "
			SELECT country.*
			FROM destination.country;
		";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_CLASS, 'App\API\Entity\Country');

		return $result;
	}
	
}