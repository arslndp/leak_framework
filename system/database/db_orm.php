<?php
    //									//
   //								   //
  //	THIS IS EXPRIMENTAL CODE 	  //
 //									 //
//									//


/* made by arsalan */
/**
 * dibuat karna seang patah hati :(
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

//making a simple orm using php

class orm{

	private $action;
	private $table;
	private $todo;

	function __construct($dbconnection){

		$this->db = $dbconnection;

	}

	function query($table,$action,$todo){

		if($action == 'UPDATE'){

			$data['table'] = $table;

			$sql = "UPADET ?  SET ? = ? WHERE ? = ?";
			$row = $this->db -> prepare($sql);
			$row -> execute($data);
		}

		if($action == 'DROP'){

			$data['table'] = $table;

			$sql = "DELETE FROM ? WHERE ? = ?";
			$row = $this->db -> prepare($sql);
			$row -> execute($data);

		}

		if($action == 'SELECT'){

			$data['table'] = $table;

			$sql = "SELECT ? FROM ? WHERE ? = ?";
			$row = $this->db -> prepare($sql);
			$row -> execute($data);

		}

		if($action == 'INSERT'){

			$data['table'] = $table;

			$sql = "INSERT INTO ? VALUES(?)";
			$row = $this->db -> prepare($sql);
			$row -> execute($data);

		}

	}

	function action(){

		

	}

}



