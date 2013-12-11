<?php 
	require_once '../application.php';
	$page = $_GET['pageId'];
	$note = $_GET['noteId'];
	echo $note;
	switch ($page) {

		case 'home.php':
			echo '<div class="container main">';
			require ROOT_PATH . '/partials/note.php';
			require ROOT_PATH . '/partials/recent.php';
			break;
		case 'new.php':
			require ROOT_PATH . '/partials/new.php';
			break;
		case 'all.php':
			require ROOT_PATH . '/partials/all.php';
			break;
		case 'remove.php':
			require ROOT_PATH . '/partials/remove.php';
			break;
		case 'edit.php':
			require ROOT_PATH . '/partials/edit.php';
			break;

		default:
			require ROOT_PATH . '/partials/note.php';
			require ROOT_PATH . '/partials/recent.php';
			break;
	}

 ?>