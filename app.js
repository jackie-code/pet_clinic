$('#flashMessage').hide();    //this allows message to fade into view by allowing message to start as hidden
$('#flashMessage').fadeIn(3000);      //allows message to fade in by 3 seconds
$('#flashMessage').slideDown(1000);
$('#flashMessage').delay(3000);
$('#flashMessage').slideUp();


// or altogether like this:
// $('flashMessage').hide().slideDown(1000).delay(3000).slideUp();



// ***********THIS IS BEST FOR READABILITY************
// $('flashMessage')
// .hide()
// .slideDown(1000)
// .delay(3000)
// .slideUp();



var radios = document.forms["formA"].elements["answer"]; 
for (radio of radios) {
    radio.onclick = function () {
        if (radios.value == "happy") {
            $('#right').html("");
            $("#left").html('<img class="round" src="flash_images/smile.jpg" alt="happy"><p>Thank you for your feedback</p>');
        } else if (radios.value == "sad") {
            $('#left').html("");
            $("#right").html('<img class="round" src="flash_images/sadguilty.jpg" alt="sad"><p>Sad to hear. Please tell us how we can improve</p>');
        }
    }
}

// does this jqery version do the same thing??

// if($('#h').click(function())
//     $("left").html('<img src="#" alt="happy">Happy Image</img>');
// )else {
//     $("right").html('<img src="#" alt="sad">Sad Image</img>');
// }