<?php
include_once 'konfiguracija.php'; 



  $izraz = $veza -> prepare("insert into zelje(zelja) values ('')"); 
  $izraz -> execute($_POST);
  $zelja = $veza->lastInsertId();
  header("location: zelje.php?sifra=" . $zelja);