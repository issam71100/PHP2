<?php
/**
 * Created by PhpStorm.
 * User: kaihatsu-sha
 * Date: 18/10/2019
 * Time: 13:43
 */

namespace App\API\Entity;


use JsonSerializable;

class Country implements JsonSerializable
{
	private $id;
	private $name;
	private $city_id;
	
	/**
	 * @return mixed
	 */
	public function getId():?int
	{
		return $this->id;
	}
	
	
	/**
	 * @param mixed $id
	 */
	public function setId(?int $id): void
	{
		$this->id= $id;
	}
	
	
	/**
	 * @return mixed
	 */
	public function getName():string
	{
		return $this->name;
	}
	
	/**
	 * @param mixed $name
	 */
	public function setName(string $name): void
	{
		$this->name = $name;
	}
	
	/**
	 * @return mixed
	 */
	public function getCityId():?int
	{
		return $this->city_id;
	}
	
	/**
	 * @param mixed $city_id
	 */
	public function setCityId($city_id): void
	{
		$this->city_id = $city_id;
	}
	
	
	/**
	 * Specify data which should be serialized to JSON
	 * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
	 * @return mixed data which can be serialized by <b>json_encode</b>,
	 * which is a value of any type other than a resource.
	 * @since 5.4.0
	 */
	public function jsonSerialize():array
	{
		// TODO: Implement jsonSerialize() method.
		return [
			'id' => $this->getId(),
			'name' => $this->getName(),
			'city_id' => $this->getCityId()
		];
	}
	
}