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
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 */
////////////////////////////////////////
//									  //
//	MODIFY THIS SCRIPT AS YOU NEED 	  //
//									  //
//	donate pulsa on +6289680837605	  //
//									  //
////////////////////////////////////////


	session_start();

	/*

	  setting on secure.php locate on system/security/secure.php 
	  and setting your own secure level low,mid,high
	
	*/
	require 'system/security/secure.php';

	//db configuration
	require 'system/database/db_config.php';

	//db of the languange you can add or edit your own languange here
	require 'system/lang/config.php';
	
	//configuration
	require 'system/config/config.php';
	
	//user agent detector
	require 'system/detector/userAgent.php';

	//helper , it will let you to get title and many more..
	require 'system/helper/helper.php';
	
	//class , your own custome class or function
	require 'system/class/config.php';

	//it will checking resource template
	if($template['head'] == '') {

		include 'application/view/welcome.php';

	}else{

		include $template['head'];
		

		if(!empty($_GET['page'])){
		
			include 'application/controller/'.$_GET['page'].'/index.php';
		
		}else{
		
			if(!empty($_GET['action'])){

				include 'application/controller/'.$_GET['action'];

			}else{

				include $template['home'];

			}
		
		}

		include $template['sidebar'];

		include $template['foot'];
	}
