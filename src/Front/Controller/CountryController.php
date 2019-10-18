<?php
/**
 * Created by PhpStorm.
 * User: kaihatsu-sha
 * Date: 15/10/2019
 * Time: 12:14
 */

namespace App\Front\Controller;


use App\API\Repository\CityRepository;
use App\API\Repository\CountryRepository;

class CountryController extends AbstractController
{
	private $countryRepository;
	private $cityRepository;
	
	public function __construct(CountryRepository $countryRepository, CityRepository $cityRepository)
	{
		$this->countryRepository= $countryRepository;
		$this->cityRepository= $cityRepository;
	}
	
	/**
	 * @param array $uriVars
	 */
	public function index(array $uriVars = [])
	{
		$countries = $this->countryRepository->findAll();
		$capital = [];
		foreach ($countries as $country){
			$capital[$country->getId()] = $this->cityRepository->getCityByID($country->getID());
		}
		$this->render('country/index', [
			'countries' => $countries,
			'capital' => $capital,
		]);
	}
}