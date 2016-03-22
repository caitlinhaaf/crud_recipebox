<?php
try {
	// include database setup
	include('db_init.php');
	$sql = "CREATE TABLE IF NOT EXISTS `recipe`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `instructions` VARCHAR(255) NOT NULL,
    `fav` BOOLEAN,
    PRIMARY KEY(`id`)
  ) ENGINE = InnoDB;";
	// execute that statement
	$statement= $db->prepare( $sql );
  $statement->execute();

	// enter the submitted data into the database
  // select recipe (name, id, fav)
  // select associated ingredients (iid, name, measurements)
  //select associated notes
	$sql = "SELECT `id`,`name`,`link`,`fav` FROM `recipe`
					ORDER BY `name` ASC";
	// execute that statement
	$query = $db->prepare( $sql );
	$query->execute();

	// as long as evertying is okay...
	// output
	$retval['message'] = 'success';
	$retval['data'] = $query->fetchAll( PDO::FETCH_ASSOC );

} catch( PDOException $err ) {
	$retval['message'] = 'error';
	$retval['data'] = $err->getMessage();
}

echo json_encode( $retval );
 ?>
