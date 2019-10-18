<?php
/**
 * Created by PhpStorm.
 * User: kaihatsu-sha
 * Date: 18/10/2019
 * Time: 09:36
 */

namespace App\API\Migrations;
require_once 'vendor/autoload.php';


class Migrations20191018 extends AbstractMigrations
{
	protected $sql = "
		DROP DATABASE IF EXISTS destination;
		CREATE DATABASE IF NOT EXISTS destination;
		CREATE TABLE destination.city(
			id TINYINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(100),
			image VARCHAR(100)
		);
	";
	
	
}