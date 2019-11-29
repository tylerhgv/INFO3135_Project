<?php
require('interest_db.php');

function get_group_by_name($groupname){
	global $db;
	$query = 'SELECT * FROM group_ WHERE group_.name = :groupname ORDER BY groupID';
	$statement = $db->prepare($query);
	$statement->bindValue(':groupname',$groupname);
	$statement->execute();
	$group = $statement->fetch();
	$statement->closeCursor();
	return $group;
}

function get_groupID($groupname){
	global $db;
	$query = 'SELECT groupID FROM group_ WHERE group_.name = :groupname';
	$statement = $db->prepare($query);
	$statement->bindValue(':groupname',$groupname);
	$statement->execute();
	$group = $statement->fetch();
	$groupID = $group['groupID'];
	$statement->closeCursor();
	return $groupID;
}

function check_group_exist($groupname){
	if (get_group_by_name($name)==NULL)
		return FALSE;
	else
		return TRUE;
}

#create a new group, $master is the userID of the creator
function add_group($groupname,$description,$profilePic,$userID){
	global $db;
	$query = 'INSERT INTO group_(name,description,profilePic)
			  VALUES(:groupname,:description,:profilePic)';
	$statement = $db->prepare($query);
	$statement->bindValue(':groupname',$groupname);
	$statement->bindValue(':description',$description);
	$statement->bindValue(':profilePic',$profilePic);
	$statement->execute();
	$statement->closeCursor();
	$groupID = get_groupID($groupname);
	$query = 'INSERT INTO userGroup(userID,groupID,isAdmin)
			  VALUES(:userID,:groupID,TRUE)';
	$statement = $db->prepare($query);
	$statement->bindValue(':userID',$userID);
	$statement->bindValue(':groupID',$groupID);
	$statement->execute();
	$statement->closeCursor();
}

function modify_group($groupname,$description,$profilePic){
	global $db;
	if ($profilePic == NULL){
		$query = 'UPDATE group_
			SET description = :description
			WHERE name = :groupname'
	} else {
		$query = 'UPDATE group_
			SET description = :description,
				profilePic = :profilePic
			WHERE name = :groupname'
	}
	$statement = $db->prepare($query);
	$statement->bindValue(':groupname',$groupname);
	$statement->bindValue(':description',$description);
	$statement->bindValue(':profilePic',$profilePic);
	$statement->execute();
	$statement->closeCursor();
}

function join_group($userID,$groupID){
	global $db;
	$query = 'INSERT INTO usergroup
			VALUES(:userID,:groupID,'0')';
	$statement = $db->prepare($query);
	$statement->bindValue(':userID',$userID);
	$statement->bindValue(':groupID',$groupID);
	$statement->execute();
	$statement->closeCursor();
}

function leave_group($userID,$groupID){
	global $db;
	$query = 'DELETE FROM usergroup
			WHERE userID = :userID AND groupID = :groupID';
	$statement = $db->prepare($query);
	$statement->bindValue(':userID',$userID);
	$statement->bindValue(':groupID',$groupID);
	$statement->execute();
	$statement->closeCursor();
}

#modify a group's interests, $name is the group's name, $interests is an array of integers representing interestID
function modify_group_interest($groupname,$interests){
	global $db;
	$groupID = get_groupID($groupname);
	for ($i=0;$i<INTEREST_COUNT;$i++)) {
		if (in_array($i, $interests) && (!exist_group_interest($groupID,$i))){
			$query = 'INSERT INTO groupinterest
					VALUES(:groupID,:interestID)';
			$statement = $db->prepare($query);
			$statement->bindValue(':groupID',$groupID);
			$statement->bindValue(':interestID',$i);
			$statement->execute();
			$statement->closeCursor();
		}
		elseif ((!in_array($i, $interests)) && exist_group_interest($groupID,$i) ) {
			$query = 'DELETE FROM groupinterest
					WHERE groupID = :groupID AND interestID = :interestID';
			$statement = $db->prepare($query);
			$statement->bindValue(':groupID',$groupID);
			$statement->bindValue(':interestID',$i);
			$statement->execute();
			$statement->closeCursor();
		}
	}
}

#check if a group has a specific interest
function exist_group_interest($groupID,$interestID){
	global $db;
	$query = 'SELECT * FROM groupinterest
			WHERE groupID = :groupID AND interestID = :interestID';
			$statement = $db->prepare($query);
			$statement->bindValue(':groupID',$groupID);
			$statement->bindValue(':interestID',$interestID);
			$statement->execute();
			$if_exist = $statement->fetch();
			$statement->closeCursor();
			if ($if_exist != NULL)
				return TRUE;
			else
				return FALSE;
}

function list_groupIDs_by_interest($interestID){
	global $db;
	$query = 'SELECT groupID FROM groupinterest
			WHERE interestID = :interestID';
			$statement = $db->prepare($query);
			$statement->bindValue(':interestID',$interestID);
			$statement->execute();
			$groupIDs = $statement->fetchAll();
			$statement->closeCursor();
			return $groupIDs;
}
?>