<?php 
include '../../view/header.php';
include '../../auth/formerrors.php';

    //check if the person has created their profile
    if($_SESSION['hasProfile'] == 0){
        header('location: ../../auth/registrationpage.php?stage=1');
    }
    
        echo $_SESSION['profile_fName'] . '<br>'; 
        echo $_SESSION['profile_lName'] . '<br>';
        echo $_SESSION['profile_dob'] . '<br>';
        echo $_SESSION['profile_pic'] . '<br>';
        echo $_SESSION['profile_bio'] . '<br>';
        echo $_SESSION['profile_location'] . '<br>';
        echo $_SESSION['profile_email'] . '<br>';

        $dog_index = 0;
        foreach($_SESSION['profile_dogs'] as $dog){
            echo $dog['name'] . '<br>';
            echo $dog['breed'] . '<br>';
            echo $dog['gender'] . '<br>';
            echo $dog['dob'] . '<br>';
            echo $dog['adoptedDate'] . '<br>';
            ?>
                <form action="dog_edit.php" method="post">
                <input type="hidden" name="dog_index" value="<?php echo $dog_index; ?>">
                    <button type="submit" class="link">Edit Dog</button>
                </form> 
                <form action="manage_dog.php?action=delete" method="post">
                <input type="hidden" name="dog_id" value="<?php echo $dog['dogID']; ?>">
                    <button type="submit" name="dog_delete" class="link">Delete Dog</button>
                </form> 
             <?php
             $dog_index = $dog_index + 1;
        }

?>

<h1>WELCOME BACK</h1>

<img src="profilePics/<?php echo $_SESSION['profile_pic']; ?>">
<a href="profile_edit.php">Edit Profile</a>

<?php include '../../view/footer.php'; ?>