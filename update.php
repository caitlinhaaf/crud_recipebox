<?php
header('Content-Type:application/json');

try {

	// include database setup
	include('db_init.php');

	$sql = "UPDATE `recipe`
          SET `name` = :name, `link` = :link, `fav` = :fav
          WHERE `id` = :id";
	// bind the params
	$statement = $db->prepare( $sql );
	$statement->bindParam( ':id', $_POST['id'] );
	$statement->bindParam( ':name', $_POST['name'] );
  $statement->bindParam( ':link', $_POST['link'] );
  $statement->bindParam( ':fav', $_POST['fav'] );
	// execute that statement
	$statement->execute();

	// as long as evertying is okay...
	// output
	$retval['message'] = 'success';

} catch( PDOException $err ) {
	$retval['message'] = 'error';
	$retval['data'] = $err->getMessage();
}

echo json_encode( $retval );

 ?>
