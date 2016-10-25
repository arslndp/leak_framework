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

	session_start();
	
	$template = array( //your template directory

						head 		=> '',	// your head template directory

						home 		=> '',	// your home template directory

						foot 		=> '',	// your foot template directory

						sidebar 	=> ''	// your sidebar template directory

		);

	$resource = array(
						css 		=> '', // your directory css
						
						js 			=> '' // your directory javascript

		);

	$controller = array(
							// you can add more or delete this controller , 

						Artikel		=> '', // your controller folder

						kategori	=> '' // your controller folder

		);

	$url_local = ''; //root of local resource

	$url = ''; //the root directory of your template or theme

	$web_name = ''; //name of your website

	$db_link = 'system/database/db_config.php'; //db_config link

	$getTitle = ''; //it will show the title of your website

	$encryption = ''; //it just a exprimental feature

	
