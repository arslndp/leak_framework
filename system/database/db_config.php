<?php


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


$db_auth = array(
					dbtype 			=> '', // your database driver 
					u_mysql			=> '', // your username of your database
					p_mysql			=> '', // your password of your database
					dbname 			=> '', // your database name 
					host 			=> '', // your host of you database

	);

/*	Konvensional array definition
$db_auth['dbtype'] 	= 'mysql'; //type database
//|\\
$db_auth['u_mysql'] = 'root'; //username database
//|\\
$db_auth['p_mysql'] = ''; //password database
//|\\
$db_auth['dbname']	= 'Gambut_blog'; //name of database
//|\\
$db_auth['host']	= 'localhost'; //host or the database address
*/
try {

	//open the conection to the database
	$dbconnection = new PDO('mysql:host=localhost;dbname=Gambut_blog',$db_auth['u_mysql'],$db_auth['p_mysql']);

	
} catch (PDOException $e) {

		if($template['head'] == ''){
			echo 'database offline or you are not yet setup the database';
		}else{			
			//when database is offline will redirect to this page
			header('location:system/error/client/server_down.php');
		}
}

/*
"$sql = "SELECT * FROM Gambut_Kategori where id_kategori = '3'";
$row = $dbconnection -> prepare($sql);
$row -> execute();
$fetch = $row -> fetch();
echo $fetch['id_kategori'];"
*/
