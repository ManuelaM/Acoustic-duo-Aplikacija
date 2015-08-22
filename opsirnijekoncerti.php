<?php include_once 'konfiguracija.php'; ?>

<?php include_once 'head.php'; ?>



<body>
 
<?php include_once 'zaglavlje.php'; ?>




<div class="row">

      <?php

        $izraz = $veza -> prepare("select * from koncert where sifra=:sifra");
        $izraz -> execute(array(":sifra" => $_GET['sifra']));
        $rezultati = $izraz -> fetch(PDO::FETCH_OBJ);

        

      ?>

      <div class="large-12 columns">
        <div class="sve">
        <h4 class="sjena"><?php echo $rezultati->naziv ?></h4>
    

     
        <h6><?php echo $rezultati->datum ?></h6>
      

   
        <h5><?php echo $rezultati->mjesto ?><h5>
     

 
        <h3 class="opis"><?php echo $rezultati->opis ?></h3>

      </div>
</div>
      
      <?php
      

         $koncert = $veza->prepare("SELECT * FROM slika WHERE koncert=:sifra");
         $koncert->execute(array(":sifra" => $_GET['sifra']));
        $slike = $koncert->fetchAll(PDO::FETCH_OBJ);

        foreach($slike as $slika):?>
        <img class="slika" width="500" height="500" src="<?php echo $slika->putanja; ?>">

<?php
endforeach;
?>



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