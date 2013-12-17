// on click show clicked note
$(document).on('click', '.indexSpecificNote', function(event) {
   event.preventDefault();
   // send the url plus category id with get
   var noteId = $(this).attr('data-id');

   $.ajax({
         type: 'GET',
         url: '/note.php',
         data: {'noteId': noteId}
         })
   // when done, replace portfolio section with the 
   .done(function(html) {
      $('.note').replaceWith(html);
   });
});

// remove
$(document).on('click', '.remove', function(event) {
   event.preventDefault();
   // save attrbute to noteId
   var noteId = $(this).attr('data-id');
   var link = $(this);
   link.addClass('loading');
   // go to remove page
   $.ajax({
         type: 'GET',
         url: '/mainContainer.php',
         data: {'pageId': 'remove.php'}
            })
            // when done, replace portfolio section with the 
   .done(function(html) {
         $('.main').replaceWith(html);
         link.removeClass('loading');
   });
   // send the url plus category id with get
   $.ajax({
         type: 'GET',
         url: '/remove.php',
         data: {'noteId': noteId}
            })
   // when done, Put in the right note name and id
   .done(function(html) {
      $('.main').replaceWith(html);
   });
});

$(document).on('click', '.edit', function(event) {
   event.preventDefault();
   // save attrbute to noteId
   var noteId = $(this).attr('data-id');
   var link = $(this);
   link.addClass('loading');
   // go to remove page
   $.ajax({
         type: 'GET',
         url: '/mainContainer.php',
         data: {'pageId': 'edit.php'}
            })
            // when done, replace portfolio section with the 
   .done(function(html) {
         $('.main').replaceWith(html);
         link.removeClass('loading');
   });
   // send the url plus category id with get
   $.ajax({
         type: 'GET',
         url: '/edit.php',
         data: {'noteId': noteId}
            })
   // when done, replace portfolio section with the 
   .done(function(html) {
      $('.main').replaceWith(html);
   });
});
