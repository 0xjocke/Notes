$(document).on('click', '.addBtn', function(event) {
	event.preventDefault();
	// save attrbute to noteId
	var note = $('.add').serializeArray();
	var title = note[0].value;
  var content = note[1].value;
	$.ajax({
         type: 'POST',
         url: '/new.php',
         data: {'title': title, 'content': content}
       })
  .done(function(html){
    $('.main').replaceWith(html);
  });
    $.ajax({
         type: 'GET',
         url: '/mainContainer.php',
         data: {'pageId': 'home.php'}
            })
            // when done, set page ID to home
   .done(function(html) {
         $('.main').replaceWith(html);
   });
});