<?php 
include 'connection.php';
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";
    $result = mysqli_query($conn, $query);

    //check result and generate message with code below 
    if ($row = mysqli_fetch_assoc($result)) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $row['UserID'];
        $_SESSION['name'] = $row["First_Name"].' '.$row["Second_Name"];
        $_SESSION['email'] = $email;
        header('location:dashboard.php');
    } else {
        $_SESSION['error'] = 'User not recognized';
        header('location:notrecognize.php');
    }
}
