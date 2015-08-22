<?php include_once 'konfiguracija.php'; ?>

<div class="row">
	<div class="large-12 columns hide-for-small ">
		<div class="nav-bar">
			<ul class="button-group">
				<li><a href="index.php" class="button small">Početna</a></li>
				<li><a href="onama.php" class="button small">O nama</a></li>
				<li><a href="novosti.php" class="button small">Novosti</a></li>
				<li><a href="koncerti.php" class="button small">Koncerti</a></li>
				<li><a href="zelje.php" class="button small">Želje</a></li>
				<li><a href="kontakt.php" class="button small">Kontakt</a></li>
				
<?php 
          
          if(!isset($_SESSION["autoriziran"])): ?>
<li><a href="login.php" class="button small">Log in</a></li>

<?php else: ?>
          <a href="odjava.php"><input class="button small" type="submit" value="Odjavi se" />  </a>
          
          
          <?php endif; ?>
				<li><a href="era.php" class="button small">Era</a></li>
			</ul>
		</div>
	</div>
<div>

</br>

<div class="show-for-small-only">
	<?php include_once 'izborniksmall.php' ?>
</div>