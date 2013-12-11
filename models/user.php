<?php 
class User extends BaseModel
{
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
}


 ?>