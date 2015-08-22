<?php include_once 'konfiguracija.php'; ?>

<?php if(!isset($_GET["sifra"])){
  header("location: index.php");
} ?>

<?php include_once 'head.php'; ?>



<body>
 
<?php include_once 'zaglavlje.php'; ?>




<div class="row">

      <?php

        
        $izraz = $veza -> prepare("select * from novosti where sifra=:sifra");
        $izraz -> execute(array(":sifra" => $_GET['sifra']));
        $objekt = $izraz -> fetch(PDO::FETCH_OBJ);

         $izraz = $veza -> prepare("select * from koncert where sifra=:sifra");
        $izraz -> execute(array(":sifra" => $_GET['sifra']));
        $rezultati = $izraz -> fetch(PDO::FETCH_OBJ);


        

      ?>

      <div class="large-12 columns">
        <div class="sve">
        <h4 class="sjena"><?php echo $objekt->naslov ?></h4>
      

       
        <h6><?php echo $rezultati->mjesto ?></h6>
      

        <h6><?php echo $objekt->datum ?></h6>
     

    
        <h3 class="opis"><?php echo $objekt->tekst ?></h3>
    

    </div>

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