<?php
include '../view/header.php' ;
include 'formerrors.php';

  // If the user is already signed in, send them to the home page
  if(isset($_SESSION['signedin']) && $_SESSION['signedin'] === true){
        header('location: ../home/index.php');
        exit();
  }

?>

<div class="signuppage">
    <h3 class="mb-5">Sign Up</h3>
    <form action="signup.php" method="post" class="col-md-6">
        <input type="hidden" name="stage" value="1">
        <div class="form-group mb-4">
            <label for="inputUsername">Username</label>
            <input type="text" class="form-control" id="inputUsername" name="username" aria-describedby="usernameHelp" placeholder="Enter Username" value="<?php if(isset($_GET['username'])){ echo $_GET['username']; } ?>" required>
            <small id="usernameHelp" class="form-text text-muted">Enter a username that you will remember. This will be used to sign in to your account.</small>
        </div>
        <div class="form-group mb-4">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password" aria-describedby="passwordHelp" placeholder="Enter Password" minlength="7" required>
            <small id="passwordHelp" class="form-text text-muted">Enter a password that is a minimum of 7 characters long. Make it something strong that can't easily be guessed.</small>
        </div>
        <div class="form-group mb-4">
            <label for="inputPasswordMatch">Re-type Password</label>
            <input type="password" class="form-control" id="inputPasswordMatch" name="password_match" aria-describedby="passwordMatchHelp" placeholder="Password" minlength="7" required>
            <small id="passwordMatchHelp" class="form-text text-muted">Enter in the same password that you typed above.</small>
        </div>
        <div class="form-group mt-5">
            <p class="float-left">Already have an account? <a href="signinpage.php">Sign In</a></p>
            <button type="submit" class="btn btn-primary float-right">Sign Up</button>
        </div>
    </form>
</div>
<?php include '../view/footer.php'; ?>
