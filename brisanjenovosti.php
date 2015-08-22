<?php
include_once 'konfiguracija.php';

if (!isset($_SESSION["autoriziran"])) {
	header("location: " . $putanjaApp . "novosti.php");
}

	$veza->beginTransaction();
	$izraz = $veza -> prepare("delete from novosti_koncert where novosti=:sifra");	
	$izraz -> execute($_GET);
	$izraz = $veza -> prepare("delete from novosti where sifra=:sifra");	
	$izraz -> execute($_GET);
	$veza->commit();
	header("location: novosti.php");
 