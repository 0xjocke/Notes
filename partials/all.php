<?php 
	$notes = Notes::all();
	Authorization::checkOrRedirect();
 ?>
 <div class="container main">
	<div class="span12 allBox">
		<h2>All notes</h2>
		<ul>
		<?php foreach ($notes as $note): ?>
			<li class="specificNote" data-id="<?php echo $note->id ?>">
				<img class="dateIcon" src="/images/date.svg" alt="date">
				<a><?php echo $note->title; ?></a>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>