<?php

/* made by arsalan */
/**
 * dibuat karna sedang patah hati :(
 *	
 *	
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 * @package	Krakken Framwork
 * @author Muhammad Arsalan diponegoro
 * @copyright	Copyright (c) 2016 - 2017, 
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://gambut-network.ga/
 * @since	Version 0.0.1
 * @filesource
 */

class query{

	private $db;

	function __construct($config)
	{
		$this -> db = $config;
	}

	public function dataview($query)
	{
		$id = base64_decode($_GET['id']); 
		$stmt = $this -> db -> prepare($query);
		$stmt -> execute();
	}

	function update($sql)
	{

		$row = $PDO -> prepare($this->sql);
		$row -> execute();

	}


	function remove($sql)
	{

		$row = $PDO -> prepare($this->sql);
		$row -> execute();

	}

	function search($sql)
	{

		$row = $PDO -> prepare($this->sql);
		$row -> execute();

	}
}
