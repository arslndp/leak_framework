<?php
//
//	THIS EXPRIMENTAL CODE //
//
//
//
//

require '../config.php'; //bakal require file config.php dan menghubungkan $PDO

//class nama hara() membuat class dengan nama hajar

class hajar{ 

		//	ADA PRIVATE
		//		PUBLIC
		//		PROTECT
		
		private $db; // private hanya dapat di akses oleh class itu sendiri
			function __construct($PDO){
				
				$this->db = $PDO;
				
				//variable this adalah sebuah variable khusus 
				//dalam oop php yg digunakan sebagai penunjuk kepada
				//dari dalam class dalam manual php , $this disebut dengan istilah pseudo-variable
				//sumber : duniailkom
				
			}
		
	//fungsi gagal paham
		function query($sql_a){ //fungsi akan menampilkan data yg telah di atur
			
			$row = $this->db->prepare($sql_a);
			$row -> execute();
			$hajar = $row -> fetch();
			echo "berhasil";
			echo $hajar['judul_artikel'];
			return true;
		}
	//fungsi berhasil paham
		function berhasilPaham(){
			echo "saya sudah paham";
		}
	}
//menampilkan fungsi di atas dengan di echo

$hasil = new hajar($PDO);
$sql_a = 'select * from Gambut_artikel where id_artikel = 26';
$hasil -> query($sql_a);
?>
