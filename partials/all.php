<?php 
	$notes = Notes::all();
	Authorization::checkOrRedirect();
 ?>
 <div class="container main">
	<div class="span12 allBox">
		<h2>All notes</h2>
		<ul>
		<?php foreach ($notes as $note): ?>
			<li class="specificNote" data-id="<?php echo $note->id ?>"><a><?php echo $note->title; ?></a></li>
		<?php endforeach; ?>
			<li><a href="" class="smallBtn">Get more</a></li>
		</ul>
	</div>
</div>