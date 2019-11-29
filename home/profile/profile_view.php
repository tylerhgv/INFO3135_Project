<?php
include '../../view/header.php';

    //check if the person has created their profile
    if($_SESSION['hasProfile'] == 0){
        header('location: ../../auth/registrationpage.php?stage=1');
    }
?>
<!-- Main container -->
<div class="container-fluid p-0">
  <div class="row w-100 m-0">
    <!-- Left column -->
    <div class="col-2 p-3">
      <div class="card">
        <h4 class="card-header">Profile</h4>
        <div class="list-group list-group-flush">
          <a href="profile_edit.php" class="list-group-item list-group-item-action">Edit Profile</a>
        </div>
      </div>
    </div>
    <!-- Middle column -->
    <div class="col-6 p-3 middle-height">
      <div class="card">
        <h4 class="card-header"><?php echo $_SESSION['profile_fName']; ?>'s Profile</h4>
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="profilePics/<?php echo $_SESSION['profile_pic']; ?>" class="card-img" alt="Profile Picture">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text"><b>Full Name: </b><?php echo $_SESSION['profile_fName'];?> <?php echo $_SESSION['profile_lName'];?></p>
              <p class="card-text"><b>Date of Birth: </b><?php echo $_SESSION['profile_dob'];?></p>
              <p class="card-text"><b>Location: </b><?php echo $_SESSION['profile_location'];?></p>
              <p class="card-text"><b>Email: </b><?php echo $_SESSION['profile_email'];?></p>
              <p class="card-text"><b>Biography: </b><?php echo $_SESSION['profile_bio'];?></p>
              <p class="card-text"><b>Interests: </b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mt-3">
        <h4 class="card-header"><?php echo $_SESSION['profile_fName']; ?>'s Dogs</h4>
        <div class="card-body p-3 right-scroll">
          <?php foreach($_SESSION['profile_dogs'] as $dog){ ?>
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title"><?php echo $dog['name'];?></h5>
                <p class="card-text"><b>Breed: </b><?php echo $dog['breed'];?></p>
                <p class="card-text"><b>Gender: </b><?php echo $dog['gender'];?></p>
                <p class="card-text"><b>Date of Birth: </b><?php echo $dog['dob'];?></p>
                <p class="card-text"><b>Adopted Date: </b><?php echo $dog['adoptedDate'];?></p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <!-- Right column -->
    <div class="col-4 p-3">
      <div class="card">
        <h4 class="card-header"><?php echo$_SESSION['profile_fName']; ?>'s Groups</h4>
        <div class="card-body p-3 right-scroll">
          <div class="card">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="#" class="card-img" alt="Group's Profile Picture">
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <h5 class="card-title">Group Name</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Topics: interest1, interest2</h6>
                  <p class="card-text">Group description Group description Group description Group description Group description Group description</p>
                  <a href="#" class="btn btn-primary">Visit Group</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="#" class="card-img" alt="Group's Profile Picture">
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <h5 class="card-title">Group Name</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Topics: interest1, interest2</h6>
                  <p class="card-text">Group description Group description Group description Group description Group description Group description</p>
                  <a href="#" class="btn btn-primary">Visit Group</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="#" class="card-img" alt="Group's Profile Picture">
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <h5 class="card-title">Group Name</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Topics: interest1, interest2</h6>
                  <p class="card-text">Group description Group description Group description Group description Group description Group description</p>
                  <a href="#" class="btn btn-primary">Visit Group</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include '../../view/footer.php'; ?>
