<?php
/**
 * Created by PhpStorm.
 * User: kaihatsu-sha
 * Date: 15/10/2019
 * Time: 12:14
 */

namespace App\Front\Controller;


class HomepageController extends AbstractController
{
	/**
	 * @param array $uriVars
	 */
	public function index(array $uriVars = [])
	{
		$date = new \DateTime();
		
		$this->render('homepage/index', [
			'id' => $uriVars['id'],
			'date' => $date->format('d/m/y'),
		]);
	}
}