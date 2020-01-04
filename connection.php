<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'winery';
$conn = mysqli_connect($hostname, $username, $password, $dbname) or
    exit("Unable to connect to database!");
