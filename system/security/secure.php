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

/*
#
#	give TRUE for enable 
##################################
#	and FALSE for disable
#
*/

$secure = array(
					xss 				=> 		'TRUE',
					session_secure		=>		'TRUE',
					csrf 				=>		'TRUE',
					lfi 				=>		'TRUE',
					directLink 			=>		'TRUE',
					botnet 				=>		'TRUE',
					rfi 				=>		'TRUE'
	);

/*
****************************************
*
*	KONVENSIONAL MODULE ENABLING 
*	A MODULE BY USING 'TRUE or 'FALSE'
*
****************************************


//xss attack module
$xss = 'TRUE';

//sanitaize session module
$session_secure = 'TRUE';

//anti CROSS SITE FORGERY module
$csrf = 'TRUE';

//anti Local file Inclusion module
$lfi = 'TRUE';

//anti Direct Link module
$directLink = 'TRUE';

//anti botnet module
$botnet = 'TRUE';

//anti Remote File Inclusion module
$rfi = 'TRUE';


*/

/*

	handling case		

*/


require '__botnet.php'; 			// botnet module

require '__csrf.php'; 				// csrf module

require '__directlink.php'; 		// directlink module

require '__encryption.php'; 		// encryption module

require '__lfi.php'; 				// lfi module

require '__rfi.php'; 				// rfi module 

require '__session.php'; 			// secure session module

require '__xss.php'; 				// xss module



//$botnet 		= botnet($secure['botnet']); 

//$csrf 			= csrf($secure['csrf']);

//$directLink		= directLink($secure['directlink']);

//$encryption 	= encryption($secure['encryption']);

$lfi 			= lfi($secure['lfi']);

//$rfi 			= rfi($secure['rfi']);

//$session_secure = session_secure($secure['session_secure']);

//$xss 			= xss($secure['xss']);



