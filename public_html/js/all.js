/*global console:true*/
// View: all.php 
// on click to go index and show clicked note
$(document).on('click', '.specificNote', function(event) {
        event.preventDefault();
        // save attrbute to noteId
        var noteId = $(this).attr('data-id');
   $.ajax({
         type: 'GET',
         url: '/mainContainer.php',
         data: {'pageId': 'home.php'}
            })
            // when done, replace portfolio section with the 
   .done(function(html) {
         $('.main').replaceWith(html);
   })
   .fail(function() {
      console.log("error");
   })
   .always(function() {
      console.log("complete");
   });
   // send the url plus category id with get
        $.ajax({
                        type: 'GET',
                        url: '/note.php',
                        data: {'noteId': noteId}
            })
   // when done, replace portfolio section with the 
   .done(function(html) {
      $('.note').replaceWith(html);
   })
        .fail(function() {
                console.log("error");
        })
        .always(function() {
                console.log("complete");
        });
});