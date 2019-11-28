<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Dog App</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php session_start(); ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-end">
      <a class="navbar-brand mr-auto" href="index.php?action=home">DogApp</a>
      <?php
        // Navbar changes dynamically
        if (isset($_SESSION['signedin']) && $_SESSION['signedin'] === true) {
      ?>
        <div class="navbar-nav">
          <a class="nav-link" href="index.php?action=home">Home</a>
          <a class="nav-link" href="index.php?action=profile">Profile</a>
          <a class="nav-link" href="index.php?action=groups">Groups</a>
          <a class="nav-link" href="index.php?action=events">Event</a>
          <a class="nav-link" href="index.php?action=logout">Logout</a>
        </div>
      <?php } else { ?>
        <div class="navbar-nav">
          <a class="nav-link" href="index.php?action=signin">Sign In</a>
          <a class="nav-link" href="index.php?action=signup">Sign Up</a>
        </div>
      <?php } ?>
    </nav>
