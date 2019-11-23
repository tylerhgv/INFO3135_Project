<?php include '../views/header.php'; ?>

<h1>WELCOME BACK</h1>

<?php
    echo $_SESSION['signedin'] . '<br>';
    echo $_SESSION['username'];
?>

<?php include '../views/footer.php'; ?>
