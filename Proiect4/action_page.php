<?php

function died($error) {
    echo "Error: <br><br>";
    echo $error . "<br><br>";
    echo "Please go back and fix.";
    die();
}

$error_message = "";
$string_exp = "/^[A-Za-z.'-]+$/";
if (!isset($_POST['captcha'])) {
    $error_message .= "Please enter the captcha!<br>";
}
if ($_POST['captcha'] != $_POST['correctsum']) {
    $error_message .= "The sum is not correct!<br>";
}
if (strlen($error_message) > 0) {
    died($error_message);
} else {
    $user = "admin";
    $pass = "admin";
    $message = "";
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        if ($_POST["username"] == $user && $_POST["password"] == $pass) {
            session_start();
            $_SESSION["user_name"] = $_POST["username"];
            if (isset($_POST['rememberme'])) {/* Set cookie to last 1 year */
                setcookie('username', $_POST['username'], time() + 60 * 60 * 24 * 365);
                setcookie('password', md5($_POST['password']), time() + 60 * 60 * 24 * 365);
                echo "Remember me cookie set! ";
            } else {
                setcookie('username', $_POST['username'], false);
                setcookie('password', md5($_POST['password']), false);
                echo"Remember me cookie not set! ";
            }
            header("Location:index.php");
        } else {
            $message = "Invalid user/pass.";
            echo $message;
        }
    } else {
        header("Location:index.php");
    }
}