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

function getTitle(){

/*	OLD VERSION OF THIS FUCNTION
	
	if($_GET['article'] == ''){
		echo "Main blog";
	}
	if($_GET['article']) {
		echo $_GET['article'];
	}

*/
	if($_GET['article'] == ''){
		if($_GET['action'] == 'kategori/view.php'){
			echo "Kategori";
		}
		if($_GET['kategori']){
			echo 'Kategori : '.$_GET['kategori'];
		}
		else{
			echo "Main blog";
		}
	}
	if($_GET['article']) {
		echo $_GET['article'];
	}


}

function getContentMeta(){

	if($_GET['article']){
		echo urldecode($_GET['article']);
	}

}

function getLang(){

	if($_GET['lang'] == ''){
		echo "eng";
	}
	if ($_GET['lang'] == 'id') {
		echo "id";
	}

}

function ref(){

	$ref = $_GET['ref'];

	

}



