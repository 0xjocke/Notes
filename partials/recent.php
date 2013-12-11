<?php 
	$notes = Notes::all();
 ?>
	<div class="recent">
		<h2>Recent notes</h2>
		<ul>
		<?php foreach ($notes as $note): ?>
			<li>
				<img class="dateIcon" src="/images/date.svg" alt="date">
				<a class="indexSpecificNote" data-id="<?php echo $note->id ?>"><?php echo $note->title; ?></a>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>