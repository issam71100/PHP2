<?php
/**
 * Created by PhpStorm.
 * User: kaihatsu-sha
 * Date: 15/10/2019
 * Time: 12:14
 */

namespace App\API\Controller;


use App\API\Repository\CityRepository;

class HomepageController extends AbstractController
{
	private $cityRepository;
	
	public function __construct(CityRepository $cityRepository)
	{
		$this->cityRepository= $cityRepository;
	}
	
	/**
	 * @param array $uriVars
	 */
	public function index(array $uriVars = [])
	{
		$this->render([
			'cities' => $this->cityRepository->findAll(),
		]);
	}
}