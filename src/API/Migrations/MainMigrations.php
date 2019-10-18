<?php
/**
 * Created by PhpStorm.
 * User: kaihatsu-sha
 * Date: 18/10/2019
 * Time: 09:47
 */

namespace App\API\Migrations;
require_once 'vendor/autoload.php';

use App\API\Core\Container;

use DirectoryIterator;

new MainMigrations();

class MainMigrations
{
	
	public function __construct()
	{
		$directory = new DirectoryIterator(__DIR__);
		$sql = "START TRANSACTION;";
		
		foreach ($directory as $file){
			if (!$file->isDot() && preg_match('#^Migrations#', $file->getFilename())){
				$filename = preg_replace('#\.php#','',$file->getFilename());
				$namespace = "App\\API\\Migrations\\$filename";
				$instance = new $namespace();
				$sql .= $instance->getSQL();
			}
		}
		$sql .= "COMMIT;";

		$container = new Container();
		$database = $container->get('core.database');
		$connection = $database->connect();
		
		$query = $connection->prepare($sql);
		$query->execute();
	}
	
}