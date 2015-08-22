<?php include_once 'konfiguracija.php'; ?>

<?php include_once 'head.php'; ?>

<body>
 
<?php include_once 'zaglavlje.php'; ?>

<?php if(isset($_SESSION["autoriziran"])):
          ?>
<div class="row">
  <div class="large-3 columns">

<a href="dodajkoncert.php" class="dodaj">
<input type="button" class="small button" value="Dodaj">
</a>
        
  </div>
</div>
  <?php
        endif;
         ?>







<div class="row">
  <?php
      
      
      $izraz = $veza -> prepare("select * from koncert order by datum desc"
        ); 
      $izraz -> execute();
      $rezultati = $izraz -> fetchAll(PDO::FETCH_OBJ);
      foreach ($rezultati as $r):

      ?>
  <div class="large-12 columns">
   <div class="sve">
    
<h4 class="sjena"><?php echo $r->naziv; ?></h4>



  <p><?php echo $r->datum; ?></p>







  <a href="opsirnijekoncerti.php?sifra=<?php echo $r->sifra ?>" class="small button"> Opširnije </a>

<?php if(isset($_SESSION["autoriziran"])): ?>

  <a href="brisanjekoncerti.php?sifra=<?php echo $r->sifra ?>" class="obrisi">
    <input type="button" class="small button" value="obriši">
  </a>
<?php endif; ?>

<?php if(isset($_SESSION["autoriziran"])): ?>

  <a href="promjenakoncerti.php?sifra=<?php echo $r->sifra ?>" class="promjena">
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