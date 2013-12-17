<?php 
	require_once '../application.php'; 
	Authorization::checkOrRedirect();
	$user = User::findUserWithId($_SESSION['is_authenticated']);

?>

<?php require ROOT_PATH . '/partials/header.php'; ?>
	<body>
		<div class="topLeft">
			<a class="smallBtn" href="logout.php">Logout</a>
		</div>
		<div class="container">
			
			<?php require ROOT_PATH . '/partials/nav.php'; ?>
		</div>
			<div class="container main">
			<?php require ROOT_PATH . '/partials/mainContainer.php'; ?>
		</div>
		<script src="js/script-ck.js"></script>
	</body>
</html>

