<?php 
    session_start();//session start for display msg
    $conn = mysqli_connect('localhost','root','') or die(mysqli_error());//connection to the database
    $db_select=mysqli_select_db($conn,'easy_booking') or die(mysqli_error());//select database
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../menu/style.css">
    <title>Sheat Booking</title>
</head>
<body>
    <nav>              
        <ul>
            <li>
                <a href="#" class="logo">
                    <img src="../menu/bus.png" alt="bus">
                    <span class="nav-item">Easy Booking</span>
                </a>
            </li>
            <li>
                <a href="../Dashboard-admin/">
                    <i class="bi bi-house-fill"></i>
                    <span class="nav-item">Home</span>
                </a>
            </li>
            <li>
                <a href="../Dashboard-admin/manage-bus.php">
                    <i class="bi bi-bus-front-fill"></i>
                    <span class="nav-item">Manage Bus Routes</span>
                </a>
            </li>
            <li>
                <a href="../Dashboard-admin/manage-bookings.php">
                    <i class="bi bi-bookmark-check-fill"></i>
                    <span class="nav-item">Manage Bookings</span>
                </a>
            </li>
            <li>
                <a href="../Dashboard-admin/manage-payment.php">
                    <i class="bi bi-currency-dollar"></i>
                    <span class="nav-item">Manage Payments</span>
                </a>
            </li>
            <li>
                <a href="../Dashboard-admin/settings.php">
                    <i class="bi bi-gear-fill"></i>
                    <span class="nav-item">Settings</span>
                </a>
            </li>
            <li>
                <a href="../../" class="logout">
                    <i class="bi bi-box-arrow-left"></i>
                    <span class="nav-item">Log Out</span>
                </a>
            </li>
        </ul>
    </nav>
    <section class="top-bar">
        <section class="Search-bar">
                <input type="text" placeholder="Search" name="search" >
                <button type="submit"><i class="bi bi-search" aria-hidden="true"></i></button>
        </section>
    </section>
    