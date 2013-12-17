<?php 
	require_once '../application.php';
	Authorization::checkOrRedirect();
	$note = Notes::find($_GET['noteId']);
	if (isset($_POST['content']) && $_POST['content'] !== "") {
		$note = Notes::find($_POST['id']);
	  	$note->attributes($_POST);
		$note->save();		
	}
?>

<div class="container main box">
	<h2 class="center">Edit note</h2>
	<form class="editForm">
		<input type="hidden" id="id" name="id" value="<?php echo $note->id; ?>">
		<div class="formRow">
			<label for="title">Title</label><br>
			<input type="text" class="feedback-input noPadding" id="title" name="title" value="<?php echo $note->title; ?>">
		</div>
		<div class="formRow">
			<label for="content">Content</label><br>
			<textarea class="feedback-input noPadding" id="content" name="content" rows="8"><?php echo $note->content; ?></textarea>	
		</div>
		<div class="formRow">
			<input type="submit" class="editBtn smallBtn">	
		</div>
	</form>

</div>
