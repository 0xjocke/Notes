  function goToHome(){
  $.ajax({
         type: 'GET',
         url: '/mainContainer.php',
         data: {'pageId': 'home.php'}
            })
            // when done, replace portfolio section with the 
   .done(function(html) {
         $('.main').replaceWith(html);
   });
}

function goToPage(pageName, noteId, link){
   if (link) {
    link.addClass('loading');
   }
    // send the url plus category id with get
   $.ajax({
         type: 'GET',
         url: '/'+pageName+'.php',
         data: {'noteId': noteId}
         })
   // when done, Put in the right note name and id
   .done(function(html) {
      $('.main').replaceWith(html);
      if (link) {
        link.removeClass('loading');
      }
   });
}
function getNote(noteId) {
     $.ajax({
         type: 'GET',
         url: '/note.php',
         data: {'noteId': noteId}
         })
   // when done, replace portfolio section with the 
   .done(function(html) {
      $('.note').replaceWith(html);
   });
}