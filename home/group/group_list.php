<?php include '../../view/header.php'; ?>
<?php
require('../../model/database.php');
require('../../model/group_db.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//Check if the user is signed in
if(empty($_SESSION['signedin']) || $_SESSION['signedin'] != true){
    header('location: ../../index.php');
    exit();
}
//Get information to display
$groupIDs = get_groups_by_userid($_SESSION['userId']);
?>
<!-- Main container -->
<div class="container-fluid p-0">
  <div class="row w-100 m-0">
    <!-- Left column -->
    <div class="col-2 p-3">
      <div class="card">
        <h4 class="card-header">Group</h4>
        <div class="list-group-flush">
          <a href="group_add.php" class="list-group-item list-group-item-action">Create New Group</a>
        </div>
      </div>
    </div>
    <!-- Middle column -->
    <div class="col-5 p-3 middle-height">
      <div class="card">
        <div class="card-header">
          <h4>Discover Groups</h4>
          <ul class="nav nav-tabs card-header-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="group-suggested-tab" data-toggle="tab" href="#group-suggested" role="tab" aria-controls="group-suggested" aria-selected="true">Suggested</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="group-search-tab" data-toggle="tab" href="#group-search" role="tab" aria-controls="group-search" aria-selected="false">Search</a>
            </li>
          </ul>
        </div>
        <div class="tab-content">
          <div class="card-body p-3 middle-scroll tab-pane fade show active" id="group-suggested" role="tabpanel" aria-labelledby="group-suggested-tab">
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
          <div class="card-body p-3 middle-scroll tab-pane fade" id="group-search" role="tabpanel" aria-labelledby="group-search-tab">
            Search for group here
          </div>
        </div>
      </div>
    </div>
    <!-- Right column -->
    <div class="col-5 p-3">
      <div class="card">
        <h4 class="card-header">My Groups</h4>
        <div class="card-body p-3 right-scroll">
          <?php foreach($groupIDs as $groupID) { ?>
            <?php $group = get_group_by_id($groupID['groupID']); ?>
            <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-3">
                  <img src="profilePics/<?php echo $group['profilePic']; ?>" class="card-img" alt="Group's Profile Picture">
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $group['name']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Topics: interest1, interest2</h6>
                    <p class="card-text"><?php echo $group['description']; ?></p>
                    <a href="#" class="btn btn-primary">Visit Group</a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include '../../view/footer.php'; ?>
