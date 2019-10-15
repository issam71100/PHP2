<?php
/**
 * Created by PhpStorm.
 * User: kaihatsu-sha
 * Date: 15/10/2019
 * Time: 12:14
 */

namespace App\API\Controller;


class HomepageController
{
	/**
	 * @param array $uriVars
	 */
	public function index(array $uriVars = [])
	{
		// extract convertit les clés d'un array en variables
		extract($uriVars);
		require_once __DIR__ . '/../../../template/homepage/index.php';
	}
}