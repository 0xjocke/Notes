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
         goToHome();
      });
});

$(document).on('click', '.cancel', function(event) {
   event.preventDefault();
   var link = $(this);
   link.addClass('loading');
   goToHome();
});
