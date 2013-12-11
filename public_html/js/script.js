/*global console:true*/
// @codekit-append index.js
// @codekit-append allPHP.js
// @codekit-append new.js
// @codekit-append remove.js
// @codekit-append edit.js
// view = navigation / on all pages
// show clicked page
$(document).on('click', '.mainNav', function(event) {
   event.preventDefault();
   // save attrbute to noteId
   var pageId = $(this).attr('data-page');
   // send the url plus category id with get
   $.ajax({
         type: 'GET',
         url: '/mainContainer.php',
         data: {'pageId': pageId}
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