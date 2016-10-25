<?php


/* THIS FEATURE IS EXPRIMENTAL */


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

session_start();

//for session name
$session_name 	  = 'akun';

//secure session
$session_secure   = 'TRUE';

//session using httpONLY
$session_httponly =	'TRUE';

if($_SESSION['akun']){

	ini_set('session.use_only_cookies');

	$cookieparams['lifetime'] = 1440;

	$cookieparams = session_get_cookie_params();

	session_set_cookie_params($cookieparams);

	session_name($session_name);

	session_start();
	
	session_regenerate_id(true);	
}

	$check_session = $_COOKIE["PHPSESSID"];

	if($_COOKIE['PHPSESSID'] > '1'){
		$_COOKIE['PHPSESSID'] = 'none';
	}