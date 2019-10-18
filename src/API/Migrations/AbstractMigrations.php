<?php
/**
 * Created by PhpStorm.
 * User: kaihatsu-sha
 * Date: 18/10/2019
 * Time: 11:55
 */

namespace App\API\Migrations;


class AbstractMigrations
{
	public function getSQL() : string
	{
		return $this->sql;
	}
}