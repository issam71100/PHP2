<?php
/**
 * Created by PhpStorm.
 * User: kaihatsu-sha
 * Date: 18/10/2019
 * Time: 09:36
 */

namespace App\API\Migrations;
require_once 'vendor/autoload.php';


class Migrations20191020 extends AbstractMigrations
{
	protected $sql = "
		CREATE TABLE destination.country(
			id TINYINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(100),
			city_id TINYINT,
			CONSTRAINT FK_CityCountry FOREIGN KEY (city_id)
			REFERENCES destination.country(city_id)
		);
		
		INSERT INTO destination.country
		VALUES (NULL,'France',1),
					 (NULL,'Japon',2),
					 (NULL,'Royaume Unis',3);
	";
	
}