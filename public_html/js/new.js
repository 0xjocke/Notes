/*global goToHome:true*/
$(document).on('click', '.addBtn', function(event) {
	event.preventDefault();
	// save attrbute to noteId
	var note = $('.add').serializeArray();
	var title = note[0].value;
  var content = note[1].value;
  var link = $(this);
  link.addClass('loading');

	$.ajax({
         type: 'POST',
         url: '/new.php',
         data: {'title': title, 'content': content}
       })
  .done(function(html){
    $('.main').replaceWith(html);
    link.removeClass('loading');
    goToHome();
  });
});