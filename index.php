<?php include 'views/header.php' ; ?>
    <?php

        if(isset($_SESSION['signedin'])){
            if(isset($_SESSION['signedin']) === true){
                header('location: home/index.php');
                exit();
            }
        }

        if(isset($_GET['message']) && $_GET['message'] != ""){
            $message = $_GET['message'];
        }
        if(isset($message) && $message != ""){
            echo '
                <div>
                    ' . $message . '
                </div>
            ';
        }
    ?>
    <div>
        <h3>Sign In</h3>
        <form action="auth/signin.php" method="post">
            <input type="hidden" name="action" value="signin">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit">Sign In</button>
        </form>
    </div>
    <div>
        <h3>Sign Up</h3>
        <form action="auth/signup.php" method="post">
            <input type="hidden" name="action" value="signup">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>
            <label for="password-match">Retype Password</label>
            <input type="password" name="password_match" id="password-match">
            <br>
            <button type="submit">Sign up</button>
        </form>
    </div>
    <div>
        <h3>Sign Out</h3>
        <form action="auth/signout.php" method="post">
            <button type="submit">Sign Out</button>
        </form>
    </div>
<?php include 'views/footer.php'; ?>
