<head>
<link rel="stylesheet" type="text/css" href="med_toy_food.css">
</head>

<?php
include "header_nav.php";
include "dbconnect_clinic.php";
$sql = "SELECT * FROM food WHERE 1";
$foods = $db->query($sql); 
?>







<main>
  <div class="container-fluid">
    <div class="row">
        <?php
          while ($food = $foods->fetch(PDO:: FETCH_ASSOC)) {
            ?>

      <div class="card col col-12 col-sm-6 col-md-4 col-lg-3">
        <img src="flash_images/<?= $food['image'] ?>" class="card-img-top" alt="pet food">
        <div class="card-body">
          <p class="card-text"><?= $food{'description'} ?></p>
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