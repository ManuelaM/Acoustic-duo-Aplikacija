<?php include_once 'konfiguracija.php'; ?>

<?php include_once 'head.php'; ?>

<body>
 
<?php include_once 'zaglavlje.php'; ?>


<div class="large-12 columns">
<img src="slike\era.jpg">
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