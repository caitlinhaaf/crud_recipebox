<?php
try {
	// include database setup
	include('db_init.php');

	// enter the submitted data into the database
  // select recipe (name, id, fav)
  // select associated ingredients (iid, name, measurements)
  //select associated notes
	$sql = "SELECT `id`,`name`,`fav` FROM `recipe`
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
