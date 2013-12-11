$(document).on('click', '.editBtn', function(event) {
	event.preventDefault();
	// save attrbute to noteId
	var note = $('.editForm').serializeArray();
	var id = note[0].value;
	var title = note[1].value;
	var content = note[2].value;
	$.ajax({
         type: 'POST',
         url: '/edit.php',
         data: {'id': id, 'title': title,
         'content': content}
       })
      .done(function(html) {
         $('.main').replaceWith(html);
      });

    $.ajax({
         type: 'GET',
         url: '/mainContainer.php',
         data: {'pageId': 'home.php'}
            })
            // when done, replace portfolio section with the 
   .done(function(html) {
         $('.main').replaceWith(html);
   });
});
