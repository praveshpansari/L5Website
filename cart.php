<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    if (!in_array($_GET['product'], $SESSION['cart'])) {
        array_push($_SESSION['cart'], $_GET['product']);
    }
}
