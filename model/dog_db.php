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

?>