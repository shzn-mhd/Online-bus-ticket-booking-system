<?php
session_start();
$conn = mysqli_connect('localhost','root','') or die(mysqli_error());//connection to the database
$db_select=mysqli_select_db($conn,'easy_booking') or die(mysqli_error());//select database
//get id of admin to deleted
 $nic = $_GET['nic'];

 // sql for delete

 $sql = "DELETE FROM customer WHERE nic='$nic'";
 $res = mysqli_query($conn, $sql);

 if($res==1) //check sql succsses
    {
        //session variables for display msg
        $_SESSION['del']="<p class='error'>Route Delete is Success!</p>";

        //redirect page
        header('location:'.'./manage-bookings.php');
    }
    else
    {
         //session variables for display msg
         $_SESSION['del']="<p class='error'>Route Delete is Faild!</p>";

         //redirect page
         header('location:'.'./manage-bookings.php');
    }
?>