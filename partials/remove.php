<?php 
require_once '../application.php';
Authorization::checkOrRedirect();


	$note = Notes::find($_GET['noteId']);
	if ($_POST['reallyDelete'] == 'yes') {
		$note = Notes::find($_POST['noteId']);
		$note->remove();
	}
 ?>
 <div class="container main">
	<div class="span12 removeBox">
		<h2> Are you sure you want to delete "<?php echo $note->title ?>"?</h2>
		<a class="reallyDelete smallBtn" data-id="<?php echo $note->id ?>" data-delete="1">Delete</a>
		<a class="cancel smallBtn">Cancel</a>
	</div>
</div>