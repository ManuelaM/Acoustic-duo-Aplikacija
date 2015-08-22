<?php include_once 'konfiguracija.php'; ?>

<?php include_once 'head.php'; ?>

<body>
 
<?php include_once 'zaglavlje.php'; ?>

<?php if(isset($_SESSION["autoriziran"])):
          ?>
<div class="row">
  <div class="large-3 columns">

<a href="dodajnovosti.php" class="dodaj">
<input type="button" class="small button" value="Dodaj">
</a>
        
  </div>
</div>
  <?php
        endif;
         ?>







<div class="row">
  <?php
      
      
      $izraz = $veza -> prepare("select a.sifra, a.naslov, a.datum, a.tekst
        from novosti a inner join novosti_koncert b on a.sifra=b.novosti
        inner join koncert c on c.sifra=b.koncert order by a.datum asc"
        ); 
      $izraz -> execute();
      $rezultati = $izraz -> fetchAll(PDO::FETCH_OBJ);
      foreach ($rezultati as $r):

      ?>
  <div class="large-12 columns">
    <div class="sve">
    
<h4 class="sjena"><?php echo $r->naslov; ?></h4>



  <h6 class="subheader"><?php echo $r->datum; ?></h6>







  <a href="opsirnijenovosti.php?sifra=<?php echo $r->sifra ?>" class="small button"> Opširnije </a>

<?php if(isset($_SESSION["autoriziran"])): ?>

  <a href="brisanjenovosti.php?sifra=<?php echo $r->sifra ?>" class="obrisi">
    <input type="button" class="small button" value="obriši">
  </a>
<?php endif; ?>

<?php if(isset($_SESSION["autoriziran"])): ?>

  <a href="promjenanovosti.php?sifra=<?php echo $r->sifra ?>" class="promjena">
    <input type="button" class="small button" value="promjena">
  </a>
<?php endif; ?>

</div>

</div>

<?php endforeach; ?>

</div>


<?php include_once 'podnozje.php'; ?>







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