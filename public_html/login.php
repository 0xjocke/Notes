<?php 
require_once '../application.php';


// define userName
$errorMessage = '';

//if POST userName and password is set
if (isset($_POST['userName']) && isset($_POST['password'])) {
	// save username in userName variable
	$userName = $_POST['userName'];
	// if note check with db ok echo wrong
	// else send to index
	if (!Authorization::authenticate($_POST['userName'], $_POST['password'])) {
		$errorMessage = "Wrong password or username!";
	} else {
		header('Location: /');
		exit;
	}
} else if (isset($_POST['submit'])){
  	// if not all is set. This will not get triggred often thanks to html5 validation
  	$errorMessage = "Please fill out all fields";
}
?>
<?php require ROOT_PATH . '/partials/header.php'; ?>
   <body>
	  <div class="container">
	  	<h1>Login</h1>
		<form action="" method="post" class="form">
			<?php 
			// if errormsg not "" echo it
				if ($errorMessage != '') {
					echo $errorMessage;
			} ?> <br>
			<!-- Html 5 validations -->
			<div class="formRow">
				<input placeholder="Username" type="text" name="userName" id="user" class="login" required><br>
			</div>
			<div class="formRow">
				<input placeholder="Password" type="password" name="password" id="keypass" class="login" required><br>
			</div>	
			<div class="formRow">
				<input type="submit" id="submit" value="Login" />
		 	</div>
		 </form>
	  </div>
   </body>
</html>