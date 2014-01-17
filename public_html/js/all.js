/*global goToHome:true*/
/*global getNote:true*/

// View: all.php 
// on click to go index and show clicked note
$(document).on('click', '.specificNote', function(event) {
        event.preventDefault();
        // save attrbute to noteId
        var noteId = $(this).attr('data-id');
        goToHome();
        getNote(noteId);
});