/*global console:true*/
$(document).on('click', '.reallyDelete', function(event) {
   event.preventDefault();
   // save attrbute to noteId
   var noteId = $(this).attr('data-id');
   // send the url plus category id with get
   $.ajax({
         type: 'POST',
         url: '/remove.php',
         data: {'reallyDelete': 'yes', 'noteId': noteId}
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
});

$(document).on('click', '.cancel', function(event) {
   event.preventDefault();
   $.ajax({
      type: 'GET',
      url: '/mainContainer.php',
      data: {'pageId': 'home.php'}
   })
    // when done, go to home
   .done(function(html) {
         $('.main').replaceWith(html);
   })
   .fail(function() {
      console.log("error");
   })
   .always(function() {
      console.log("complete");
   });
});
