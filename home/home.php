<?php include '../view/header.php'; ?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
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
    <div class="col-2 p-3">
      <div class="card">
        <h4 class="card-header">Home</h4>
        <div class="list-group list-group-flush">
          <a href="profile/index.php" class="list-group-item list-group-item-action">My Profile</a>
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
        <div class="card-header">
          <h4>Discover People</h4>
          <ul class="nav nav-tabs card-header-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="people-suggested-tab" data-toggle="tab" href="#people-suggested" role="tab" aria-controls="people-suggested" aria-selected="true">Suggested</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="people-search-tab" data-toggle="tab" href="#people-search" role="tab" aria-controls="people-search" aria-selected="false">Search</a>
            </li>
          </ul>
        </div>
        <div class="tab-content">
          <div class="card-body p-3 middle-scroll tab-pane fade show active" id="people-suggested" role="tabpanel" aria-labelledby="people-suggested-tab">
            <div class="card">
              <div class="row no-gutters">
                <div class="col-md-3">
                  <img src="#" class="card-img" alt="Profile Picture">
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <h5 class="card-title">Name</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Mutual interests: interest1, interest2</h6>
                    <p class="card-text">Biography Biography Biography Biography Biography Biography Biography </p>
                    <a href="#" class="btn btn-primary">Visit Profile</a>
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
                    <h6 class="card-subtitle mb-2 text-muted">Mutual interests: interest1, interest2</h6>
                    <p class="card-text">Biography Biography Biography Biography Biography Biography Biography </p>
                    <a href="#" class="btn btn-primary">Visit Profile</a>
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
                    <h6 class="card-subtitle mb-2 text-muted">Mutual interests: interest1, interest2</h6>
                    <p class="card-text">Biography Biography Biography Biography Biography Biography Biography </p>
                    <a href="#" class="btn btn-primary">Visit Profile</a>
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
                    <h6 class="card-subtitle mb-2 text-muted">Mutual interests: interest1, interest2</h6>
                    <p class="card-text">Biography Biography Biography Biography Biography Biography Biography </p>
                    <a href="#" class="btn btn-primary">Visit Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body p-3 middle-scroll tab-pane fade" id="people-search" role="tabpanel" aria-labelledby="people-search-tab">
            Search for people here
          </div>
        </div>
      </div>
    </div>
    <!-- Right column -->
    <div class="col-4 p-3">
      <div class="card">
        <h4 class="card-header">Upcoming Event</h4>
        <div class="card-body p-3 right-scroll">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Event Name</h5>
              <h6 class="card-subtitle mb-2 text-muted">Event Date & Time</h6>
              <h6 class="card-subtitle mb-2 text-muted">Event Location</h6>
              <p class="card-text">Event description Event description Event description Event description Event description Event description </p>
              <a href="#" class="btn btn-primary">Go to Event</a>
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-body">
              <h5 class="card-title">Event Name</h5>
              <h6 class="card-subtitle mb-2 text-muted">Event Date & Time</h6>
              <h6 class="card-subtitle mb-2 text-muted">Event Location</h6>
              <p class="card-text">Event description Event description Event description Event description Event description Event description </p>
              <a href="#" class="btn btn-primary">Go to Event</a>
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-body">
              <h5 class="card-title">Event Name</h5>
              <h6 class="card-subtitle mb-2 text-muted">Event Date & Time</h6>
              <h6 class="card-subtitle mb-2 text-muted">Event Location</h6>
              <p class="card-text">Event description Event description Event description Event description Event description Event description </p>
              <a href="#" class="btn btn-primary">Go to Event</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include '../view/footer.php'; ?>
