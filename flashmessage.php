<?php
include "header_nav.php"
?>
    
    <main>
    <div id="left">
        LEFT COLUMN CONTENT
    </div>

    <div id="mid">
        <!-- Make this form so that when user clicks radio button either a happy/sad face appears -->
        <form name="formA">
            <p>How was your experience?</p>
            <input type="radio" id="feelh" name="answer" value="happy">
            <label id="h" for="feelh">Great</label>
            <input type="radio" id="feels" name="answer" value="sad">
            <label id="s" for="feels">Not Satisfied</label>
        </form>
    </div>

    <div id="right">
        RIGHT COLUMN CONTENT
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