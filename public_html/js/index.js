/*global goToPage:true*/
/*global getNote:true*/
// on click show clicked note
$(document).on('click', '.indexSpecificNote', function(event) {
   event.preventDefault();
   var noteId = $(this).attr('data-id');
   getNote(noteId);
});

// Go to remove page
$(document).on('click', '.remove', function(event) {
   event.preventDefault();
   var noteId = $(this).attr('data-id');
   var link = $(this);
  goToPage('remove', noteId, link);
  
});
//go to edit page
$(document).on('click', '.edit', function(event) {
   event.preventDefault();
   var noteId = $(this).attr('data-id');
   var link = $(this);
   goToPage('edit', noteId, link);
});
