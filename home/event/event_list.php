<?php include '../../view/header.php'; ?>
<?php
session_start();
//Check if the user is signed in
if(empty($_SESSION['signedin']) || $_SESSION['signedin'] != true){
    header('location: ../../index.php');
    exit();
}
?>
<!-- Main container -->
<div class="container-fluid p-0">
  <div class="row w-100 m-0">
    <!-- Left column -->
    <div class="col-2 p-3">
      <div class="card">
        <h4 class="card-header">Event</h4>
        <div class="list-group-flush">
          <a href="#" class="list-group-item list-group-item-action">Create New Event</a>
        </div>
      </div>
    </div>
    <!-- Middle column -->
    <div class="col-6 p-3 middle-height">
      <div class="card">
        <div class="card-header">
          <h4>Upcoming Events</h4>
          <ul class="nav nav-tabs card-header-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="event-date-tab" data-toggle="tab" href="#event-date" role="tab" aria-controls="event-date" aria-selected="true">Sort by Dates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="event-group-tab" data-toggle="tab" href="#event-group" role="tab" aria-controls="event-group" aria-selected="false">Sort by Groups</a>
            </li>
          </ul>
        </div>
        <div class="tab-content">
          <div class="card-body p-3 middle-scroll tab-pane fade show active" id="event-date" role="tabpanel" aria-labelledby="event-date-tab">
            <h5 class="card-title">This week</h5>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Event Name</h5>
                <h6 class="card-subtitle mb-2 text-muted">Event Date & Time</h6>
                <h6 class="card-subtitle mb-2 text-muted">Event Location</h6>
                <p class="card-text">Event description Event description Event description Event description Event description Event description </p>
                <a href="#" class="btn btn-primary">Go to Event</a>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Event Name</h5>
                <h6 class="card-subtitle mb-2 text-muted">Event Date & Time</h6>
                <h6 class="card-subtitle mb-2 text-muted">Event Location</h6>
                <p class="card-text">Event description Event description Event description Event description Event description Event description </p>
                <a href="#" class="btn btn-primary">Go to Event</a>
              </div>
            </div>
            <h5 class="card-title mt-3">Next week</h5>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Event Name</h5>
                <h6 class="card-subtitle mb-2 text-muted">Event Date & Time</h6>
                <h6 class="card-subtitle mb-2 text-muted">Event Location</h6>
                <p class="card-text">Event description Event description Event description Event description Event description Event description </p>
                <a href="#" class="btn btn-primary">Go to Event</a>
              </div>
            </div>
            <h5 class="card-title mt-3">Future</h5>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Event Name</h5>
                <h6 class="card-subtitle mb-2 text-muted">Event Date & Time</h6>
                <h6 class="card-subtitle mb-2 text-muted">Event Location</h6>
                <p class="card-text">Event description Event description Event description Event description Event description Event description </p>
                <a href="#" class="btn btn-primary">Go to Event</a>
              </div>
            </div>
          </div>
          <div class="card-body p-3 middle-scroll tab-pane fade" id="event-group" role="tabpanel" aria-labelledby="event-group-tab">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Group Name</h5>
                <h6 class="card-subtitle mb-2 text-muted">Topics: interest1, interest2</h6>
                <div class="card-body p-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Event Name</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Event Date & Time</h6>
                      <h6 class="card-subtitle mb-2 text-muted">Event Location</h6>
                      <p class="card-text">Event description Event description Event description Event description Event description Event description </p>
                      <a href="#" class="btn btn-primary">Go to Event</a>
                    </div>
                  </div>
                  <div class="card">
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
            <div class="card mt-3">
              <div class="card-body">
                <h5 class="card-title">Group Name</h5>
                <h6 class="card-subtitle mb-2 text-muted">Topics: interest1, interest2</h6>
                <div class="card-body p-3">
                  <div class="card">
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
            <div class="card mt-3">
              <div class="card-body">
                <h5 class="card-title">Group Name</h5>
                <h6 class="card-subtitle mb-2 text-muted">Topics: interest1, interest2</h6>
                <div class="card-body p-3">
                  <div class="card">
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
      </div>
    </div>
    <!-- Right column -->
    <div class="col-4 p-3">
      <div class="card">
        <h4 class="card-header">Past Events</h4>
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

<?php include '../../view/footer.php'; ?>
