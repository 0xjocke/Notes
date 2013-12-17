/*global console:true*/
/*global goToHome:true*/
$(document).on('click', '.reallyDelete', function(event) {
   event.preventDefault();
   // save attrbute to noteId
   var noteId = $(this).attr('data-id');
   // send the url plus category id with get
   var link = $(this);
    link.addClass('loading');
   $.ajax({
         type: 'POST',
         url: '/remove.php',
         data: {'reallyDelete': 'yes', 'noteId': noteId}
            })
            // when done, replace portfolio section with the 
      .done(function(html) {
         $('.main').replaceWith(html);
         link.removeClass('loading');
      })
      .fail(function() {
         console.log("error");
      })
      .always(function() {
         console.log("complete");
      });
   goToHome();
});

$(document).on('click', '.cancel', function(event) {
   event.preventDefault();
   var link = $(this);
   link.addClass('loading');
   
   $.ajax({
      type: 'GET',
      url: '/mainContainer.php',
      data: {'pageId': 'home.php'}
   })
    // when done, go to home
   .done(function(html) {
         $('.main').replaceWith(html);
         link.removeClass('loading');
   })
   .fail(function() {
      console.log("error");
   })
   .always(function() {
      console.log("complete");
   });
});
