<?php
function addNewUser($username, $hashed_pass){
    global $db;
    $query = "INSERT INTO user (userName, userPass)
                VALUES (:username, :hashed_pass)";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':hashed_pass', $hashed_pass);
    $statement->execute();
    $statement->closeCursor();
}

function checkIfUserExists($username){
    global $db;
    $query = "SELECT username FROM user
                WHERE userName = :username";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $count = $statement->rowCount();
    $statement->closeCursor();
    return $count;
}

function findUser($username, $userpass){
    global $db;
    $query = "SELECT userId, userName, userPass, hasProfile FROM user
                WHERE userName = :username";
    if($statement = $db->prepare($query)){
        $statement->bindValue(':username', $username);
        if($statement->execute()){
            if($user = $statement->fetch()){
                $statement->closeCursor();
                return $user;
            }
        }
    }
    return NULL;
}

function getUserProfile($user_id){
    global $db;
    $query = "SELECT fName, lName, dob, bio, profilePic, location, email, hasProfile FROM user
                WHERE userId = :user_id";
    if($statement = $db->prepare($query)){
        $statement->bindValue(':user_id', $user_id);
        if($statement->execute()){
            if($user_profile = $statement->fetch()){
                $statement->closeCursor();
                return $user_profile;
            }
        }
    }
    return NULL;
}

function updateUserDetails($user_id, $first_name, $last_name, $email, $dob){
    global $db;
    $query = "UPDATE user
            SET fName = :first_name,
                lName = :last_name,
                email = :email,
                dob = CAST(:dob AS DATETIME)
            WHERE userId = :user_id;";
    $statement = $db->prepare($query);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':dob', $dob);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $statement->closeCursor();
}

function updateUserProfile($user_id, $profile_pic, $biography, $location){
    global $db;
    $query = "UPDATE user
            SET profilePic = :profile_pic,
                bio = :biography,
                location = :location
            WHERE userId = :user_id;";
    $statement = $db->prepare($query);
    $statement->bindValue(':profile_pic', $profile_pic);
    $statement->bindValue(':biography', $biography);
    $statement->bindValue(':location', $location);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $statement->closeCursor();
}

function finalizeProfile($user_id, $has_profile){
    global $db;
    $query = "UPDATE user
            SET hasProfile = :has_profile
            WHERE userId = :user_id;";
    $statement = $db->prepare($query);
    $statement->bindValue(':has_profile', $has_profile);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $statement->closeCursor();
}

function checkPasswords($unhashed_pass, $hashed_pass){
    if(password_verify($unhashed_pass, $hashed_pass)){
        return true;
    }else {
        return false;
    }
}

function modify_user_interest($userID,$interests){
    global $db;
    for ($i=0;$i<INTEREST_COUNT;$i++) {
        if (in_array($i, $interests) && (!exist_user_interest($userID,$i))){
            $query = 'INSERT INTO userInterest
                    VALUES(:userID,:interestID)';
            $statement = $db->prepare($query);
            $statement->bindValue(':userID',$userID);
            $statement->bindValue(':interestID',$i);
            $statement->execute();
            $statement->closeCursor();
        }
        elseif ((!in_array($i, $interests)) && exist_user_interest($userID,$i) ) {
            $query = 'DELETE FROM userInterest
                    WHERE userID = :userID AND interestID = :interestID';
            $statement = $db->prepare($query);
            $statement->bindValue(':userID',$userID);
            $statement->bindValue(':interestID',$i);
            $statement->execute();
            $statement->closeCursor();
        }
    }
}

#check if a user has a specific interest
function exist_group_interest($userID,$interestID){
    global $db;
    $query = 'SELECT * FROM userInterest
            WHERE userID = :userID AND interestID = :interestID';
            $statement = $db->prepare($query);
            $statement->bindValue(':userID',$userID);
            $statement->bindValue(':interestID',$interestID);
            $statement->execute();
            $if_exist = $statement->fetch();
            $statement->closeCursor();
            if ($if_exist != NULL)
                return TRUE;
            else
                return FALSE;
}

function list_userID_by_interest($interestID){
    global $db;
    $query = 'SELECT userID FROM userInterest
            WHERE interestID = :interestID';
            $statement = $db->prepare($query);
            $statement->bindValue(':interestID',$interestID);
            $statement->execute();
            $userIDs = $statement->fetchAll();
            $statement->closeCursor();
            return $userIDs;
}
?>
