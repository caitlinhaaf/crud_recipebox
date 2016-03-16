<?php
// expecting json input
header('Content-Type:application/json');

try{
	// include database setup
	include('db_init.php');
  // create table, if one does not already exist
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

}catch( PDOException $err ) {
	$retval['message'] = 'error 1';
	$retval['data'] = $err->getMessage();
}


try{

// insert statement
$sql = "INSERT INTO `recipe` (`name`, `link`)
        VALUES (:name, :link);";

$statement = $db->prepare( $sql );
$statement->bindParam( ':name', $_POST['name'] );
$statement->bindParam( ':link', $_POST['link'] );
$statement->execute();

// as long as evertying is okay...
// output (for success message on front end)
$retval['message'] = 'success';

}catch( PDOException $err ) {
	$retval['message'] = 'error 2';
	$retval['data'] = $err->getMessage();
}


echo json_encode( $retval );
 ?>
