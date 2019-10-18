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

class CityRepository
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
			SELECT city.*
			FROM destination.city;
		";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_CLASS, 'App\API\Entity\City');
		return $result;
	}
	
	public function getCityByID(int $id){
		$sql = "
			SELECT city.*
			FROM destination.city
			WHERE city.id = $id;
		";
		
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_CLASS, 'App\API\Entity\City');
		return $result[0];
	}
	
}