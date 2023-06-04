<?php 
session_start();
ob_start();
/*
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="astroloji";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan)
{
    die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_error());
}
*/
try {
	 
	$db = new PDO("mysql:host=localhost;dbname=u1295384_astroloji;charset=utf8","u1295384_astroloji","HOVaqru2V&xY");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->query("SET sql_mode ='NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION'")->execute();
} catch (PDOException $hata) {
	print_r($hata->getMessage());
	exit();
}


?>