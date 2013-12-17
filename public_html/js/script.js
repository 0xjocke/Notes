/*global console:true*/
// @codekit-append functions.js
// @codekit-append index.js
// @codekit-append all.js
// @codekit-append new.js
// @codekit-append remove.js
// @codekit-append edit.js
// view = navigation / on all pages
// show clicked page
$(document).on('click', '.mainNav', function(event) {
   event.preventDefault();
    var link = $(this).children('a');
    link.addClass('loading');
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
         link.removeClass('loading');
      })
      .fail(function() {
         console.log("error");
      })
      .always(function() {
         console.log("complete");
      });
});

// Show label on signup page
$(document).on('focus', '.signup', function() {
  $(this).on('keyup', function() {
    if ($(this).val().length > 0) {
    $(this).siblings('label').fadeIn(400);
    }
  });

});
$(document).on('blur', '.signup', function() {
  if ($(this).val().length < 1) {
    $(this).siblings('label').fadeOut(400);
  }
});