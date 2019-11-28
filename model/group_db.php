<?php
function get_group_by_name($name){
	global $db;
	$query = 'SELECT * FROM group_ WHERE group_.name = :name ORDER BY groupID';
	$statement = $db->prepare($query);
	$statement->bindValue(':name',$name);
	$statement->execute();
	$group = $statement->fetchAll();
	$statement->closeCursor();
	return $group;
}

function get_groupID($name){
	global $db;
	$query = 'SELECT groupID FROM group_ WHERE group_.name = :name';
	$statement = $db->prepare($query);
	$statement->bindValue(':name',$name);
	$statement->execute();
	$group = $statement->fetch();
	$groupID = $group['groupID'];
	$statement->closeCursor();
	return $groupID;
}

function check_group_exist($name){
	if (get_group_by_name($name)==NULL)
		return FALSE;
	else
		return TRUE;
}

#create a new group, $master is the userID of the creator
function add_group($name,$description,$master){
	global $db;
	$query = 'INSERT INTO group_(name,description)
			  VALUES(:name,:description)';
	$statement = $db->prepare($query);
	$statement->bindValue(':name',$name);
	$statement->bindValue(':description',$description);
	$statement->execute();
	$statement->closeCursor();
	$groupID = get_groupID($name);
	$query = 'INSERT INTO userGroup(userID,groupID,isAdmin)
			  VALUES(:master,:groupID,TRUE)';
	$statement = $db->prepare($query);
	$statement->bindValue(':master',$master);
	$statement->bindValue(':groupID',$groupID);
	$statement->execute();
	$statement->closeCursor();
}

function modify_group($name,$description){
	global $db;
	$query = 'UPDATE group_
			SET description = :description
			WHERE name = :name';
	$statement = $db->prepare($query);
	$statement->bindValue(':name',$name);
	$statement->bindValue(':description',$description);
	$statement->execute();
	$statement->closeCursor();
}
?>