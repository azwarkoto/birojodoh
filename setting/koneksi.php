<?php
class koneksi{
	public function hubungkan(){
		$this->kon=null;
		try{
			$this->kon=new pdo('mysql:host=localhost;dbname=birojodoh;','root','');			
		}catch(PDOExeption $o){
			echo 'Koneksi Gagal lihat -> '.$o->getMessage();
		}return $this->kon;
	}
}

$server   = "localhost";
$username = "root";
$password = "";
$database = "birojodoh";

$db = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$db) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
?>
