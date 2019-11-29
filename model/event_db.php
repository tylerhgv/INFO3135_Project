<?php
require('interest_db.php');

function get_event_by_group($groupID){
	global $db;
	$query = 'SELECT * FROM event WHERE groupID = :groupID';
	$statement = $db->prepare($query);
	$statement->bindValue(':groupID',$groupID);
	$statement->execute();
	$events = $statement->fetchAll();
	$statement->closeCursor();
	return $events;
}

#create a new group, $master is the userID of the creator
function add_event($description,$location,$time,$groupID){
	global $db;
	$query = 'INSERT INTO event(description,location,time,groupID)
			  VALUES(:description,:location,:time,:groupID)';
	$statement = $db->prepare($query);
	$statement->bindValue(':description',$description);
	$statement->bindValue(':location',$location);
	$statement->bindValue(':time',$time);
	$statement->bindValue(':groupID',$groupID);
	$statement->execute();
	$statement->closeCursor();
}

?>