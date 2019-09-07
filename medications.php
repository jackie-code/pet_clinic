<head>
  <link rel="stylesheet" type="text/css" href="med_toy_food.css">
</head>



<?php
include "header_nav.php";
include "dbconnect_clinic.php";
// WHERE 1 simply means true. if it were WHERE 0, it would mean false
$sql = "SELECT * FROM medications WHERE 1";
$meds = $db->query($sql);
// "Fetch every row in the $meds result into the $med variable.For every row, print the $med values and a '<br>' FETCH_ASSOC stands for associative array


?>







<main>
  <div class="container-fluid">
    <div class="row">
      <?php
      while ($med = $meds->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="card col col-12 col-sm-6 col-md-4 col-lg-3">
          <img src="flash_images/<?= $med['image'] ?>" class="card-img-top" alt="pet medication">
          <div class="card-body">
            <p class="card-text"><?= $med['description'] ?></p>
          </div>
        </div>
      <?php
      }
      ?>

    </div>
  </div>



</main>







<?php
include "footer.php";
?>

<script src="jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Your code needs to be loaded AFTER jQuery, Bootstrap, etc. -->
<script src="app.js"></script>


</body>

</html>