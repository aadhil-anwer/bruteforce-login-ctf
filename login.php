<?php
session_start();

// Hardcoded username and password (for demonstration purposes)
$correct_username = "admin";
$correct_password = "admin";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    if ($input_username == $correct_username && $input_password == $correct_password) {
       
        $_SESSION["logged_in"] = true;
        header("HTTP/1.1 200 OK");
        echo "<h1>Congrats! You have successfully logged in.</h1>";
        exit();
        
    } else {
        
        $_SESSION["logged_in"] = false;
        header("HTTP/1.1 401 Unauthorized");
        echo "<h1>Sorry, your username or password is incorrect.</h1>";
    }
}
?>
