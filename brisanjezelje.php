<?php
include_once 'konfiguracija.php';

if (!isset($_SESSION["autoriziran"])) {
	header("location: " . $putanjaApp . "zelje.php");
}

	$veza->beginTransaction();
	$izraz = $veza -> prepare("delete from zelje where sifra=:sifra");	
	$izraz -> execute($_GET);
	$veza->commit();
	header("location: zelje.php");
