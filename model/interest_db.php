<?php
define(INTEREST_COUNT, 10);

function get_interest_by_ID($interestID){
	global $db;
	$query = 'SELECT * FROM interest
			WHERE interestID = :interestID';
			$statement = $db->prepare($query);
			$statement->bindValue(':interestID',$interestID);
			$statement->execute();
			$interest = $statement->fetch();
			$statement->closeCursor();
			return $interest;
}

#get an array of interestIDs based on groupID
function list_interest_by_group($groupID){
	global $db;
	$query = 'SELECT interestID FROM groupinterest
			WHERE groupID = :groupID';
			$statement = $db->prepare($query);
			$statement->bindValue(':groupID',$groupID);
			$statement->execute();
			$interest_IDs = $statement->fetchAll();
			$statement->closeCursor();
			return $interest_IDs;
}

#get an array of interstIDs based on userID
function list_interest_by_user($userID){
	global $db;
	$query = 'SELECT interestID FROM userinterest
			WHERE userID = :userID';
			$statement = $db->prepare($query);
			$statement->bindValue(':userID',$userID);
			$statement->execute();
			$interest_IDs = $statement->fetchAll();
			$statement->closeCursor();
			return $interest_IDs;
}

?>