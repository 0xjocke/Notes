<?php 
	require_once '../application.php';
	Authorization::checkOrRedirect();
	if (count($_POST) >= 1) {
		 $note = new Notes($_POST);
		 $note->add();


	}
?>


<div class="container main box">
	<h2 class="center">Add new note</h2>
	<form class="add">
		<div class="formRow">
			<input class="feedback-input" placeholder="Title" id="content" name="content">
		</div>
		<div class="formRow">
			<textarea class="feedback-input" id="content" name="content" placeholder="Content" rows="5"></textarea>	
		</div>
		<div class="formRow">
			<input type="submit" class="addBtn smallBtn" value="Add">	
		</div>
	</form>

</div>
