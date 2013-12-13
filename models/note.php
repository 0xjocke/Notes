<?php 
class Notes extends BaseModel
{
	const TABLE_NAME = 'notes';
	
	public $title, $content, $timestamp, $id;

	public function add(){
		$statement = self::$dbh->prepare(
			"INSERT INTO ".self::TABLE_NAME." (title, content, userID) VALUES (:title, :content, :userID)");

		$statement->execute(array('title' => $this->title, 'content' => $this->content, 'userID' => $_SESSION['is_authenticated']));

		$this->id = self::$dbh->lastInsertId();
  	}

	// saves  name and ID to db
	public function save() {
    $statement = self::$dbh->prepare(
      "UPDATE ".self::TABLE_NAME." SET title=:title,
                                       content=:content
                                       WHERE id=:id");
    $statement->execute(array('id' => $this->id,
                              'title' => $this->title,
                              'content' => $this->content
                             ));
	}
}

?>