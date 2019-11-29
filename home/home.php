<?php include '../view/header.php'; ?>
<?php
session_start();
//Check if the user is signed in
if(empty($_SESSION['signedin']) || $_SESSION['signedin'] != true){
    header('location: ../index.php');
    exit();
}
?>
<!-- Main container -->
<div class="container-fluid p-0">
  <div class="row w-100 m-0">
      <!-- Left column -->
      <div class="col-3 p-3">
        <div class="card">
          <h4 class="card-header">Home</h4>
          <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action">My Profile</a>
            <a href="#mygroup-left" data-toggle="collapse" class="list-group-item list-group-item-action">My Group</a>
          </div>
          <div class="list-group-flush collapse" id="mygroup-left">
            <a href="#" class="list-group-item list-group-item-action">Group 1</a>
            <a href="#" class="list-group-item list-group-item-action">Group 2</a>
            <a href="#" class="list-group-item list-group-item-action">Group 2</a>
            <a href="#" class="list-group-item list-group-item-action">Group 2</a>
            <a href="#" class="list-group-item list-group-item-action">Group 2</a>
          </div>
        </div>
      </div>
      <!-- Middle column -->
      <div class="col-6 p-3 middle-height">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Welcome back, <?php echo($_SESSION['username']);?>!</h4>
          </div>
        </div>
        <div class="card mt-3">
          <h4 class="card-header">Discover People</h4>
          <div class="card-body p-3 middle-scroll">
            <div class="card">
              <div class="row no-gutters">
                <div class="col-md-3">
                  <img src="#" class="card-img" alt="Profile Picture">
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <h5 class="card-title">Name</h5>
                    <p class="card-text">Biography Biography Biography Biography Biography Biography Biography </p>
                    <p class="card-text"><small class="text-muted">Mutual interest: interest 1, interest 2</small></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mt-3">
              <div class="row no-gutters">
                <div class="col-md-3">
                  <img src="#" class="card-img" alt="Profile Picture">
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <h5 class="card-title">Name</h5>
                    <p class="card-text">Biography Biography Biography Biography Biography Biography Biography </p>
                    <p class="card-text"><small class="text-muted">Mutual interest: interest 1, interest 2</small></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mt-3">
              <div class="row no-gutters">
                <div class="col-md-3">
                  <img src="#" class="card-img" alt="Profile Picture">
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <h5 class="card-title">Name</h5>
                    <p class="card-text">Biography Biography Biography Biography Biography Biography Biography </p>
                    <p class="card-text"><small class="text-muted">Mutual interest: interest 1, interest 2</small></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mt-3">
              <div class="row no-gutters">
                <div class="col-md-3">
                  <img src="#" class="card-img" alt="Profile Picture">
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <h5 class="card-title">Name</h5>
                    <p class="card-text">Biography Biography Biography Biography Biography Biography Biography </p>
                    <p class="card-text"><small class="text-muted">Mutual interest: interest 1, interest 2</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Right column -->
      <div class="col-3 p-3">
        <div class="card">
          <h4 class="card-header">Upcoming Event</h4>
            <div class="card-body p-3 right-scroll">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Event Name</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Event Date & Time</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Event Location</h6>
                  <p class="card-text">Event description Event description Event description Event description Event description Event description </p>
                  <a href="#" class="card-link">Go to Event</a>
                </div>
              </div>
              <div class="card mt-3">
                <div class="card-body">
                  <h5 class="card-title">Event Name</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Event Date & Time</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Event Location</h6>
                  <p class="card-text">Event description Event description Event description Event description Event description Event description </p>
                  <a href="#" class="card-link">Go to Event</a>
                </div>
              </div>
              <div class="card mt-3">
                <div class="card-body">
                  <h5 class="card-title">Event Name</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Event Date & Time</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Event Location</h6>
                  <p class="card-text">Event description Event description Event description Event description Event description Event description </p>
                  <a href="#" class="card-link">Go to Event</a>
                </div>
              </div>
        </div>
      </div>
  </div>
</div>

<?php include '../view/footer.php'; ?>
