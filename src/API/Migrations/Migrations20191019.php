<?php
/**
 * Created by PhpStorm.
 * User: kaihatsu-sha
 * Date: 18/10/2019
 * Time: 09:36
 */

namespace App\API\Migrations;
require_once 'vendor/autoload.php';


class Migrations20191019 extends AbstractMigrations
{
	protected $sql = "
		INSERT INTO destination.city
		VALUES (NULL,'paris','paris.jpg'),
					 (NULL,'tokyo','tokyo.jpg'),
					 (NULL,'londre','londre.jpg');
	";
	
	
}