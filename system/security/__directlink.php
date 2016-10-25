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

//
//	THIS EXPRIMENTAL FEATURE
//

//anti directlink
/*
$index = 'index.php';

//variable of your script name 
$file_direct = $_SERVER["SCRIPT_FILENAME"];

//my logika about directlink
if($file_direct == 'config.php'){

	//will redirecting to the index
	echo "<script>window.location='../../index.php'</script>";

}

//another logika about directlink
if($file_direct == 'index.php'){
	
}
*/


// 		Stupid tehnique to redirect direct link
if($_SERVER['REQUEST_URI'] == '/konsep/Gnet_framework/system/database/db_config.php' 	 | // it just my karangan xD
   
   $_SERVER['REQUEST_URI'] == '/konsep/Gnet_framework/system/database/db_cache.php'	 	 |
   
   $_SERVER['REQUEST_URI'] == '/konsep/Gnet_framework/system/database/db_env.php'	 	 |
   
   $_SERVER['REQUEST_URI'] == '/konsep/Gnet_framework/system/database/db_orm.php' 	 	 |
   
   $_SERVER['REQUEST_URI'] == '/konsep/Gnet_framework/system/config/config.php' 		 |
   
   $_SERVER['REQUEST_URI'] == '/konsep/Gnet_framework/system/config/config_env.php'		 |
   
   $_SERVER['REQUEST_URI'] == '/konsep/Gnet_framework/system/config/config_session.php'	 
	){

	header('location:../../index.php');

}



$url = $_SERVER['PHP_SELF'];

$localurl = array(
					security 		=> 'system/security/',
					logs 			=> 'system/logs/',
					clas 			=> 'system/class/',
					config 			=> 'system/config/',
					core 			=> 'system/core',
					database 		=> 'system/database',
					error 			=> 'system/error',
					helper 			=> 'system/helper',
					hook 			=> 'system/hook',
					lang 			=> 'system/lang',
					tmp 			=> 'system/tmp',
					tweak 			=> 'system/tweak'
	);