<?php include_once 'konfiguracija.php'; ?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Acoustic duo Baby Blue</title>
    <link rel="stylesheet" href="css/foundation.css" />
      <link rel="stylesheet" href="css/stil.css" />
    <script src="js/vendor/modernizr.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>

  </head>
  <body>
    
   
<div class="row">
  <div class="large-12 columns"><br/></div>

<div class="large-12 columns">
<ul class="button-group">
<li><a href="onama.php" class="button small">O nama</a></li>
<div class="button-group right">

<?php 
          
          if(!isset($_SESSION["autoriziran"])): ?>
<li><a href="login.php" class="button small">Log in</a></li>

<?php else: ?>
          <a href="odjava.php"><input class="button small" type="submit" value="Odjavi se" />  </a>
          
          
          <?php endif; ?>






<li><a href="era.php" class="button small">ERA</a></li>
</ul>


</div>
</div>
</div>



<header>
<div class="row">
  <div class="large-12 column" id="slika">



    <img src="babyblue.png">

</div>
</div>

<br />
<br />

</header>
<br>
<div class="row">
<div class="medium-3 large-3 text-center columns">
  <a href="novosti.php">
<img class="slika" src="path3.png">
</a>
<h4>Novosti</h4>
</div>
<div class="medium-3 large-3 text-center column">
  <a href="koncerti.php">
<img class="slika" src="path6.png">
</a>
<h4>Koncerti</h4>
</div>
<div class="medium-3 large-3 text-center column">
  <a href="zelje.php">
<img class="slika" src="path5.png">
</a>
<h4>Želje</h4>
</div>
<div class="medium-3 large-3 text-center column">
  <a href="kontakt.php">
<img class="slika" src="path6.png">
</a>
<h4>Kontakt</h4>
</div>
<br />
<?php include_once 'podnozje.php'; ?>
</div>





    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
