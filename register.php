<?php
include 'connection.php';
if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['registerEmail']) && isset($_POST['registerPassword'])) {
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $registerEmail = $_POST['registerEmail'];
    $registerPassword = $_POST['registerPassword'];

    $query = "SELECT * FROM users WHERE Email = '$registerEmail' and Password = '$registerPassword'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['error'] = 'User already exists';
        header('location:notrecognize.php');
    } else {
        mysqli_query($conn, "INSERT INTO users(First_Name,Second_Name, Email,Password) VALUES ('$firstname','$lastname','$registerEmail','$registerPassword')");
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $first_name . ' ' . $last_name;
        $_SESSION['email'] = $registerEmail;
        header('location:dashboard.php');
    }
}
