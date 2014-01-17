<?php 
class User extends BaseModel
{
	public $username, $email, $password, $id;
	// sets table name
	const TABLE_NAME = 'users';
	// takes a user name as parameter (string)
	// connect to db and finds userName
	// fetch that row.
	public static function findUser($userName){
		$statement = self::$dbh->prepare("SELECT * FROM " .self::TABLE_NAME. " WHERE userName = :userName");
		$statement->execute(array('userName' => $userName));
		$rs =  $statement->fetch();
		return $rs;
	}
	public static function findUserWithId($id){
		$statement = self::$dbh->prepare("SELECT * FROM " .self::TABLE_NAME. " WHERE id = :id");
		$statement->execute(array('id' => $id));
		$rs =  $statement->fetch();
		return $rs;

	}

	public static function validateSignup(array $user){
		$errorMsg = null;
		$username = filter_var($user['username'], FILTER_SANITIZE_STRING);
		$username = strtolower($username);
		$email = filter_var($user['email'], FILTER_SANITIZE_EMAIL);
		$pwd = $user['password'];
		$pwd1 = $user['password1'];
		$code = $user['code'];
		$userInDb = self::findUser($username);
		if ($username != "" && $userInDb  == false){
		}else{
	     	 $errorMsg .= "<p class='error'>Username is taken</p>";
		}
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errorMsg .= "<p class='error'>Please use a valid email.</p>";
		}
		$uppercase = preg_match('@[A-Z]@', $pwd);
		$lowercase = preg_match('@[a-z]@', $pwd);
		$number    = preg_match('@[0-9]@', $pwd);

		if(!$uppercase || !$lowercase || !$number || strlen($pwd) < 8) {
		    $errorMsg .= "<p class='error'>Password is too weak</p>";
		}
		if ($pwd != $pwd1) {
			$errorMsg .= "<p class='error'>Your passwords didnt match</p>";
		}
		if ($code != 'jocke') {
			$errorMsg .= "<p class='error'>Your code is bad, please request a new from admin</p>";
		}
		if ($errorMsg == null) {
			return true;
		}else{
			return $errorMsg;
		}

	}

	public function addUser(){
		$username = $this->username;
		$username = strtolower($username);
		$password = hash("sha256", $this->password.$username);
		$statement = self::$dbh->prepare(
			"INSERT INTO ".self::TABLE_NAME." (userName, email, pwd) VALUES (:userName, :email, :pwd)");

		$statement->execute(array('userName' => $username, 'email' => $this->email, 'pwd' => $password));

		$this->id = self::$dbh->lastInsertId();
  	
	}

	public static function greeting(){
		/* This sets the $time variable to the current hour in the 24 hour clock format */
		$time = date("H");
		/* Set the $timezone variable to become the current timezone */
		$timezone = date("e");
		if ($time < "06" || $time >= 23) {
			echo "Good Night";
		}
		/* If the time is less than 1200 hours, show good morning */
		if ($time < "12" && $time > "06") {
		echo "Good morning";
		} else
		/* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
		if ($time >= "12" && $time < "17") {
		echo "Good afternoon";
		} else
		/* Should the time be between or equal to 1700 and 1900 hours, show good evening */
		if ($time >= "17" && $time < "23") {
		echo "Good evening";
		}
	}
}


 ?>