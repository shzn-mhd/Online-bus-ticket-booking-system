<?php 
    // include('menu.php');
    session_start(); // session start for display msg
    $conn = mysqli_connect('localhost', 'root', '') or die('Unable to connect to database: ' . mysqli_error($conn)); // connection to the database with error handling
    $db_select = mysqli_select_db($conn, 'easy_booking') or die('Unable to select database: ' . mysqli_error($conn)); // select database with error handling
?>
