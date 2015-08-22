<?php
session_start();

$naslovAplikacije="Acoustic duo Baby Blue";
//za server
//$putanjaApp="/OMS20142015/tjakopec/BPII/Knjiznica/";

//lokalno
/*
$putanjaApp="/Baze2/adbb/";
$mysql_host = "localhost";
$mysql_database = "s0122215777_1";
$mysql_user = "adbb";
$mysql_password = "adbb";
*/

//server 
$putanjaApp="/OMS20142015/s0122215777/adbb/";
$mysql_host = "localhost";
$mysql_database = "s0122215777_1";
$mysql_user = "s0122215777";
$mysql_password = "2511581994";


//spajanje na bazu
$veza = new PDO("mysql:dbname=" . $mysql_database . 
		";host=" . $mysql_host . 
		"", 
			$mysql_user, $mysql_password);
$veza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$veza->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$veza->exec("SET CHARACTER SET utf8");
$veza->exec("SET NAMES utf8");