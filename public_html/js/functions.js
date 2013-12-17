  /*global console:true*/
  function goToHome(){
  $.ajax({
         type: 'GET',
         url: '/mainContainer.php',
         data: {'pageId': 'home.php'}
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
}