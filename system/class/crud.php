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

		  //											//
		 /* You can make your own function as you need */
		//											  //

class crud{

	private $db;

	public $fetch;

		function __construct($dbconnection){

			$this->db = $dbconnection;

		}

		function query($sql){

			$row = $this->db->prepare($sql);

			$row ->execute();

			$fetch = $row -> fetchAll();

			foreach ($fetch as $data) {
				echo "<h1>".$data['judul_artikel']."</h1>";
			}

			return TRUE;

		}

		function insert($sql){

			$row = $this->db -> prepare($sql);

			$row -> execute();

			$fetch = $row -> fetch();

			echo "berhasil";

		}

		function listJudul($sql){

			$row = $this->db ->prepare($sql);

			$row -> execute();

			$fetch = $row -> fetchAll();

			foreach ($fetch as $data) {

				echo "<ul><li><a>".$data['judul_artikel']."</a></li></ul>";

			}

		}

		function getInfoArtikel($artikel){

			$sql_article = "SELECT Gambut_artikel.* ,
							Gambut_user.* ,
							Gambut_Kategori.* 
							FROM 
							Gambut_artikel 
							INNER JOIN Gambut_user ON Gambut_artikel.id_user =  Gambut_user.id_user
							INNER JOIN Gambut_Kategori ON Gambut_artikel.id_kategori_artikel = Gambut_Kategori.id_kategori
							WHERE Gambut_artikel.judul_artikel = ?";
			$row_article = $dbconnection -> prepare($sql_article);
			$row_article -> execute(array($id_article));


		}

		function homelistartikel(){

			

		}
} 

class kategori{

	private $db;

		function __construct($dbconnection){

			$this->db = $dbconnection;

		}

		function kategoriResult($param_1){


			$kategori = $_GET['kategori'];

			$sql_kategori = 'SELECT Gambut_Kategori.* , Gambut_artikel.* 
							 FROM Gambut_Kategori
							 INNER JOIN Gambut_artikel ON Gambut_Kategori.id_kategori = Gambut_artikel.id_kategori_artikel
							 WHERE Gambut_Kategori.nama_kategori = ?
							 ORDER BY Gambut_artikel.date_post_artikel
							 DESC';

			$row_kategori = $this->db -> prepare($sql_kategori);
			$row_kategori -> execute(array($param_1));
			$fetch_kategori = $row_kategori -> fetchALl();

			return $fetch_kategori;

		}

		function listKategori(){

			$sql = "SELECT * FROM Gambut_Kategori";
			$row = $this->db -> prepare($sql);
			$row -> execute();
			$fetch = $row -> fetchAll();

			return $fetch;

		}

		function countKategoriArtikel(){

			$sql = 'SELECT Gambut_Kategori.* , Gambut_artikel.* 
							 FROM Gambut_Kategori
							 INNER JOIN Gambut_artikel ON Gambut_Kategori.id_kategori = Gambut_artikel.id_kategori_artikel
							 WHERE Gambut_Kategori.nama_kategori = ?
							 ORDER BY Gambut_artikel.date_post_artikel
							 DESC';

			$row = $this->db -> prepare($sql);
			$row -> execute;
			$count = $row -> rowCount();

		}
}


/*

	$sql = "SELECT * FROM Gambut_artikel";
	$crud = new crud($dbconnection);
	$row = $crud -> listJudul($sql);

*/
