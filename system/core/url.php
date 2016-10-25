<?php
defined('BASEPATH') OR exit('Hot link not allowed');

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

class getUrl{

	function showUrl()
	{
		$now_on = $_SERVER['BASEPATH'];
		return $now_on;
	}
	
	function backUrl()
	{
		echo "<script>window.location='index.php'</script>";
	}

}

class hideExtension{

	function hidePhp()
	{
		$php = $_GET['.php'] == '';
	}

}