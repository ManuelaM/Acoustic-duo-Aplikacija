<?php
include_once 'konfiguracija.php';

if (!isset($_SESSION["autoriziran"])) {
	header("location: " . $putanjaApp . "index.php");
}

if($_POST){
	$izraz = $veza -> prepare("insert into novosti(naslov,datum,tekst) values (:naslov,:datum,:tekst)");	
	$izraz -> execute($_POST);
	header("location: novosti.php");
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
					<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
						
<h5>Dodaj novost</h5>

						<label for="ime">naslov</label>
								<input type="text" id="naslov"
								name="naslov"  />
							
							<label for="prezime">datum</label>
								<input type="date" id="datum"
								name="datum" />
								
								<label for="datumrodenja">tekst</label>
								<input type="text" id="tekst"
								name="tekst" />
								
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
