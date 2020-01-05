<?php
include 'connection.php';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $productid = $_GET['product'];
    $userid = $_SESSION['user'];
    if ($productid != 'clear') {
        $query = "INSERT INTO favorites VALUES ('$userid','$productid')";
        mysqli_query($conn, $query);
        header('location:products.php');
    } else {
        $query = "DELETE FROM favorites WHERE UserID = '$userid'";
        mysqli_query($conn,$query);
        echo $productid;
        header('location:fav.php');
    }
}
