<?php
class checker{

	public $param_1;

	function __construct($dbconnection){

		$this->db = $dbconnection;

	}



	function checkKategori($param_1){

		$kategori = $_GET['kategori'];

		$sql_kategori = 'SELECT Gambut_Kategori.* , Gambut_artikel.* 
						 FROM Gambut_Kategori
						 INNER JOIN Gambut_artikel ON Gambut_Kategori.id_kategori = Gambut_artikel.id_kategori_artikel
						 WHERE Gambut_Kategori.nama_kategori = ?';

		$row_kategori = $this->db -> prepare($sql_kategori);
		$row_kategori -> execute(array($param_1));
		$fetch_kategori = $row_kategori -> rowCount();

		return $fetch_kategori;

	}

}
	