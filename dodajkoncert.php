<?php
include_once 'konfiguracija.php';

if (!isset($_SESSION["autoriziran"])) {
	header("location: " . $putanjaApp . "index.php");
}

if($_POST){

		var_dump($_FILES);
		$imeSlike = $_FILES['slika']['name'];
		$lokacija = $_FILES['slika']['tmp_name'];
		$destinacija = "koncert_slike/" . $imeSlike;
		move_uploaded_file($lokacija, $destinacija);

	$izraz = $veza -> prepare("insert into koncert(naziv,datum,mjesto,opis) values (?,?,?,?)");	
	$izraz -> execute(array($_POST['naziv'], $_POST['datum'], $_POST['mjesto'], $_POST['opis']));
	$sifra = $veza->lastInsertId();
	$izraz = $veza -> prepare("insert into slika(putanja, koncert) values(?,?)");
	$izraz -> execute(array($destinacija, $sifra));
	header("location: opsirnijekoncerti.php?sifra= " . $sifra);
}

?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<?php
		include_once 'head.php';
		?>
	</head>
	<body>
		<?php
		include_once 'zaglavlje.php';
		?>
		<div class="row">
			<div class="large-12 medium-12 small-12 columns end">
				<div class="panel">
					<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data"> 
						
<h5>Dodaj koncert</h5>

						<label for="naziv">naziv</label>
								<input type="text" id="naziv"
								name="naziv"  />
							
							<label for="datum">datum</label>
								<input type="date" id="datum"
								name="datum" />
								
								<label for="mjesto">mjesto</label>
								<input type="text" id="mjesto"
								name="mjesto" />

								<label for="opis">opis</label>
								<input type="text" id="opis"
								name="opis" />

								<label for="opis">Dodaj sliku</label>
								<input type="file" id="slika"
								name="slika" />
								

							<div class="row">
								
								
								<div class="large-6 medium-6 small-6 columns end">
									<input class="button siroko	" type="submit"
									value="Dodaj" />
								
								</div>
								
							</div>
									
				
					</form>
				</div>
			</div>
		</div>


		<?php
		include_once 'podnozje.php';
		?>
		<script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
  </script>
<script src="../assets/js/templates/jquery.js"></script>
<script src="../assets/js/templates/foundation.js"></script>
<script>
      $(document).foundation();

      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>
	</body>
</html>
