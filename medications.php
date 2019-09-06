<?php
include "header_nav.php";
include "dbconnect_clinic.php";
// WHERE 1 simply means true. if it were WHERE 0, it would mean false
$sql = "SELECT * FROM medications WHERE 1"; 
$meds = $db->query($sql);
// "Fetch every row in the $meds result into the $med variable.For every row, print the $med values and a '<br>'
while ($med = $meds ->fetch(PDO::FETCH_ASSOC)) {
  print_r($med);
  echo "<br>";
}
?>







<main>
  <div class="container-fluid">
    <div class="row">
      <div class="card col col-12 col-sm-6 col-md-4 col-lg-3">
        <img src="flash_images/enro.png" class="card-img-top" alt="Ernofloxacin medication">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card col col-12 col-sm-6 col-md-4 col-lg-3">
        <img src="flash_images/amox.png" class="card-img-top" alt="Amoxicillin medication">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card col col-12 col-sm-6 col-md-4 col-lg-3">
        <img src="flash_images/heart_guard.jpg" class="card-img-top" alt="Heart Guard medication">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card col col-12 col-sm-6 col-md-4 col-lg-3">
        <img src="flash_images/frontline_plus.jpg" class="card-img-top" alt="Frontline Plus medication">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
</main>







<footer>
  FOOTER
</footer>

<script src="jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Your code needs to be loaded AFTER jQuery, Bootstrap, etc. -->
<script src="app.js"></script>


</body>

</html>