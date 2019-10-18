<?php
/**
 * Created by PhpStorm.
 * User: kaihatsu-sha
 * Date: 15/10/2019
 * Time: 12:14
 */

namespace App\API\Controller;


use App\API\Repository\CityRepository;
use App\API\Repository\CountryRepository;

class CountryController extends AbstractController
{
	private $countryRepository;
	
	public function __construct(CountryRepository $countryRepository)
	{
		$this->countryRepository= $countryRepository;
	}
	
	/**
	 * @param array $uriVars
	 */
	public function index(array $uriVars = [])
	{
		$this->render([
			'cities' => $this->countryRepository->findAll(),
		]);
	}
}