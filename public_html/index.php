<?php 
	require_once '../application.php'; 
	Authorization::checkOrRedirect();
?>

<?php require ROOT_PATH . '/partials/header.php'; ?>
	<body>
		<div class="logout">
			<a href="logout.php">Logout</a>
		</div>
		<div class="container">
			<h1>Notes</h1>
			<?php require ROOT_PATH . '/partials/nav.php'; ?>
		</div>
			<div class="container main">
			<?php require ROOT_PATH . '/partials/mainContainer.php'; ?>
		</div>
		<script src="js/script-ck.js"></script>
	</body>
</html>