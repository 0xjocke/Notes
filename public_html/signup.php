<?php 
require_once '../application.php';
 require ROOT_PATH . '/partials/header.php';
if (isset($_POST['user'])) {
	$errorMsg =  User::validateSignup($_POST['user']);
	if (!is_string($errorMsg)) {
		$user = new User($_POST['user']);
		$user->addUser();

	}
}


?>

<body>
<div class="topRight">
	<a href="/" class="smallBtn">Back</a>
</div>
<div class="container sign">
	<h1 class="center">Sign Up</h1>
	<?php
	if (is_string($errorMsg)) {
		echo $errorMsg;
	}
	?>
	<form method="post">
		<div class="formRow">
			<label class="hidden" for="username">Username</label>
			<input class="feedback-input signup" placeholder="Username" id="user" name="user[username]" value="<?php if (isset($_POST['user'])) {
			echo $_POST['user']['username'];
			} ?>" required>
		</div>
		<div class="formRow">
			<label class="hidden" for="Email">Email</label>
			<input type="email" class="feedback-input signup" placeholder="Email" id="email" name="user[email]" value="<?php if (isset($_POST['user'])) {
			echo $_POST['user']['email'];
			} ?>" required>
		</div>
		<div class="formRow">
			<label class="hidden" for="password">Password <br><span class="smaller">*Please use both numbers and letters min 8 characters. At least one letter also needs to be in Caps</span></label>
			<input type="password" class="feedback-input signup" id="keypass" name="user[password]" placeholder="Password" value="<?php if (isset($_POST['user'])) {
			echo $_POST['user']['password'];
			} ?>" required>
		</div>
		<div class="formRow">
			<label class="hidden" for="code">Signup Code</label>
			<input type="password" class="feedback-input signup" id="code" name="user[code]" placeholder="Signup Code" value="<?php if (isset($_POST['user'])) {
			echo $_POST['user']['code'];
			} ?>" required>
		</div>
		<div class="formRow">
			<input type="submit" class="button">	
		</div>
	</form>
</div>
		<script src="js/script-ck.js"></script>
	</body>
</html>

