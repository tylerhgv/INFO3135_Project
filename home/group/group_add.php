<?php
include '../../view/header.php' ;

  // Check if the user is not signed in
  if(!isset($_SESSION['signedin']) && $_SESSION['signedin'] !== true){
        header('location: ../../auth/signinpage.php?message=mustbesignedin&redirect=../../home/profile/profile_edit.php');
        exit();
  }

?>

<!-- Main container -->
<div class="container-fluid p-0">
  <div class="row w-100 m-0">
    <!-- Left column -->
    <div class="col-3 p-3">
    </div>
    <!-- Middle column -->
    <div class="col-6 p-3 middle-height">
      <h2 class="mb-3">Create New Group</h2>
      <form action="index.php?action=create_group" method="post" enctype="multipart/form-data">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['userId']; ?>">
        <div class="form-group mb-4">
          <label for="inputGroupName">Name</label>
          <input type="text" class="form-control" id="inputGroupName" name="group_name" placeholder="Enter Group's Name" required>
        </div>
        <div class="form-group mb-4">
          <label for="inputGroupDesc">Description</label>
          <input type="text" class="form-control" id="inputGroupDesc" name="group_desc" placeholder="Enter Group's Description" required>
        </div>
        <div class="form-group mb-4 custom-file">
            <label class="custom-file-label" for="inputGroupProfile">Choose Group's Profile Picture</label>
            <input type="file" class="custom-file-input" name="group_profile" id="inputGroupProfile" required>
        </div>
        <div class="form-group mt-5">
          <button type="submit" name="create_group" class="btn btn-primary float-right">Create Group</button>
        </div>
      </form>
    </div>
    <!-- Right column -->
    <div class="col-3 p-3">
    </div>
  </div>
</div>

<?php include '../../view/footer.php'; ?>
