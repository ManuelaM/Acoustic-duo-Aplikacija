<?php include_once 'konfiguracija.php'; ?>

<?php include_once 'head.php'; ?>

<body>
 
<?php include_once 'zaglavlje.php'; ?>



<?php 
          
          if(!isset($_SESSION["autoriziran"])): ?>
        <form class="form-horizontal" action="prijavljen.php"  method="POST">
    <fieldset>
    <legend>Prijavi se</legend>





<div class="row">
    <div class="large-4 columns">
      <label for="email">Email
        <input type="email" class="prijava" id="email" name="email" placeholder="mail@example.hr" />
      </label>
 <label for="lozinka">Lozinka
        <input type="password" class="prijava" id="lozinka" name="lozinka" />
      </label>

    </div>
</div>



<input class="button info" type="submit" value="Prijava" />






 <?php else: ?>
          Prijavljeni ste kao <?php echo $_SESSION["autoriziran"]->ime?>
          <?php  echo $_SESSION["autoriziran"]->prezime;?> <a href="odjava.php"> <input class="button" type="submit" value="Odjavi se" />  
          
          <?php endif; ?>   
          
</form>
 </fieldset>


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