<?php


    // If there there is a message passed through the url, display it here
    if(isset($_GET['message']) && $_GET['message'] != ""){
        $message = $_GET['message'];
    }
    if(isset($message) && $message != ""){

        $display_message = $message;

        switch($message){
        //Error Messages
            //Sign in page
            case "emptyfields":
                $display_message = "One or more required fields are empty";
                break;
            case "usernotfound":
                $display_message = "A user does not exist with this username";
                break;
            case "incorrectpassword":
                $display_message = "The password does not match any user in our records";
                break;
            //Sign up page
            case "invalidusername":
                $display_message = "The username you are trying to use is invalid";
                break;
            case "useralreadyexists":
                $display_message = "A user already exists with this username";
                break;
            case "passwordsdontmatch":
                $display_message = "The passwords you entered do not match";
                break;
            case "cannotsavefile":
                $display_message = "The profile image could not be uploaded";
                break;
            //Registraion page
            case "mustbesignedin":
                $display_message = "You must be signed in to create your profile";
                break;
            //Profile loading Error
            case "profilenotfound":
                $display_message = "The profile you are looking for could not be found.";
                break;
        //Other Messages
            //Sign in page
            case "createdaccount":
                $display_message = "Your account has been created! Please sign in to continue.";
                echo '
                    <div class="alert alert-success">
                        ' . $display_message . '
                    </div>
                ';
                goto end;
            default:
                $display_message = "An error has occured. Please try again.";
        }

        echo '
            <div class="alert alert-danger">
                ' . $display_message . '
            </div>
        ';
    }
end:
?>