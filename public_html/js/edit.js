/*global goToHome:true*/
$(document).on('click', '.editBtn', function(event) {
	event.preventDefault();
	// save attrbute to noteId
	var note = $('.editForm').serializeArray();
	var id = note[0].value;
	var title = note[1].value;
	var content = note[2].value;
  var link = $(this);
   link.addClass('loading');
	$.ajax({
         type: 'POST',
         url: '/edit.php',
         data: {'id': id, 'title': title,
         'content': content}
       })
      .done(function(html) {
         $('.main').replaceWith(html);
         link.removeClass('loading');
      });

  goToHome();
});
