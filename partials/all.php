<?php 
	$notes = Notes::all();
 ?>
 <div class="container main">
	<div class="span12 all">
		<h2>All notes</h2>
		<ul>
		<?php foreach ($notes as $note): ?>
			<li class="specificNote" data-id="<?php echo $note->id ?>"><a><?php echo $note->title; ?></a></li>
		<?php endforeach; ?>
			<li><a href="" class="italic">Get more</a></li>
		</ul>
	</div>
</div>