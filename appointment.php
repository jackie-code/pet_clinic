<?php
include "header_nav.php"
?>

    
<main>

    <form action="appointment.html" method="POST">
<!-- pet name input -->
<label for="petname">Pet's Name</label>
<br>
<input style="border: 2px solid black;" type="text" name="petname" id="petname">

<!-- choose animal species -->
<label for="animal">Animal Type</label>
<select style="border: 2px solid black;" id="animal" name="animal">
<option value="dog">Dog</option>
<option value="cat">Cat</option>
<option value="bird">Bird</option>
<option value="reptile">Reptile</option>
<option value="rodent">Rodent</option>
</select>

<!-- check off pet's symptoms -->
<p>Symptom checker</p>
<input type="checkbox" id="skin" name="symptoms" value="symptoms">
<label for="skin">skin irritation/ itchiness </label>
<input type="checkbox" id="eating" name="symptoms" value="symptoms">
<label for="eating">increase/decrease in appetite</label>
<input type="checkbox" id="weight" name="symptoms" value="symptoms">
<label for="weight">weight gain/weight loss</label>
<input type="checkbox" id="behavior" name="symptoms" value="symptoms">
<label for="behavior">behavioral changes </label>
<input type="checkbox" id="bathroom" name="symptoms" value="symptoms">
<label for="bathroom">stool changes</label>

<!-- text area for additional comments -->
<label for="comments">Additional Comments</label>
<br>
<textarea style="border: 2px solid black;" id="comments" name="comments" rows="5" cols="30">

</textarea>

    </form>
    
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