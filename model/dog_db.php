<?php
function createDog($user_id, $dog_name, $dog_breed, $dog_gender, $dog_dob, $dog_adopt_date){
    global $db;
    $query = "INSERT INTO dog (userId, name, breed, gender, dob, adoptedDate)
                VALUES (:user_id, :dog_name, :dog_breed, :dog_gender, CAST(:dog_dob AS DATETIME), CAST(:dog_adopt_date AS DATETIME))";
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->bindValue(':dog_name', $dog_name);
    $statement->bindValue(':dog_breed', $dog_breed);
    $statement->bindValue(':dog_gender', $dog_gender);
    $statement->bindValue(':dog_dob', $dog_dob);
    $statement->bindValue(':dog_adopt_date', $dog_adopt_date);
    $statement->execute();
    $statement->closeCursor();
}

function getDog($user_id){
    global $db;
    $query = "SELECT * FROM dog
                WHERE userID = :user_id";
    if($statement = $db->prepare($query)){
        $statement->bindValue(':user_id', $user_id);
        if($statement->execute()){
            if($dogs = $statement->fetchAll()){
                $statement->closeCursor();
                return $dogs;
            }
        }
    }
    return NULL;
}

function updateDog($dog_id, $dog_name, $dog_breed, $dog_gender, $dog_dob, $dog_adopt_date){
    global $db;
    $query = "UPDATE dog 
                SET name = :dog_name,
                breed = :dog_breed,
                gender = :dog_gender,
                dob = CAST(:dog_dob AS DATETIME),
                adoptedDate = CAST(:dog_adopt_date AS DATETIME)
                WHERE dogID = :dog_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':dog_name', $dog_name);
    $statement->bindValue(':dog_breed', $dog_breed);
    $statement->bindValue(':dog_gender', $dog_gender);
    $statement->bindValue(':dog_dob', $dog_dob);
    $statement->bindValue(':dog_adopt_date', $dog_adopt_date);
    $statement->bindValue(':dog_id', $dog_id);
    $statement->execute();
    $statement->closeCursor();
}


function deleteDog($dog_id){
        global $db;
    $query = "DELETE FROM dog
                WHERE dogID = :dog_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':dog_id', $dog_id);
    $statement->execute();
    $statement->closeCursor();
}

?>