<?php
include '../view/header.php' ;
include 'formerrors.php';

  // If the user is already signed in, send them to the home page
  if(isset($_SESSION['signedin']) && $_SESSION['signedin'] === true){
        header('location: ../home/index.php');
        exit();
  }

?>

<div class="signinpage ">
    <h3 class="mb-4">Sign In</h3>

    <form action="signin.php" method="post" class="col-md-6">
    <input type="hidden" name="redirect" value="<?php if(isset($_GET['redirect'])){ echo $_GET['redirect']; } ?>">
      <div class="form-group mb-4">
        <label for="inputUsername">Username</label>
        <input type="text" class="form-control" id="inputUsername" name="username" aria-describedby="usernameHelp" placeholder="Enter Username" value="<?php if(isset($_GET['username'])){ echo $_GET['username']; } ?>" required>
        <small id="usernameHelp" class="form-text text-muted">Enter your username that you created to sign in to your account with.</small>
      </div>
      <div class="form-group mb-4">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" name="password" aria-describedby="passwordHelp" placeholder="Enter Password" minlength="7" required>
        <small id="passwordHelp" class="form-text text-muted">Enter your password. Minimum 7 characters.</small>
      </div>
      <div class="form-group mt-5">
        <p class="float-left">Don't have an account? <a href="signuppage.php">Sign Up</a></p>
        <button type="submit" class="btn btn-primary float-right">Sign In</button>
      </div>
    </form>
</div>
<?php include '../view/footer.php'; ?>
