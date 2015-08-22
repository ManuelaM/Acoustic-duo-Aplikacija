<?php
include_once 'konfiguracija.php';

if (!isset($_SESSION["autoriziran"])) {
	header("location: " . $putanjaApp . "koncerti.php");
}

	$veza->beginTransaction();
	$izraz = $veza -> prepare("delete from novosti_koncert where koncert=:sifra");	
	$izraz -> execute($_GET);
	$izraz = $veza -> prepare("delete from zelje where koncert=:sifra");	
	$izraz -> execute($_GET);
	$izraz = $veza -> prepare("delete from slika where koncert=:sifra");	
	$izraz -> execute($_GET);
	$izraz = $veza -> prepare("delete from koncert where sifra=:sifra");	
	$izraz -> execute($_GET);
	$veza->commit();
	header("location: koncerti.php");
