<?php 
include '../../view/header.php';

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
        echo $_SESSION['profile_email'];
?>

<h1>WELCOME BACK</h1>

<img src="profilePics/<?php echo $_SESSION['profile_pic']; ?>">
<a href="profile_edit.php">Edit Profile</a>


<?php include '../../view/footer.php'; ?>