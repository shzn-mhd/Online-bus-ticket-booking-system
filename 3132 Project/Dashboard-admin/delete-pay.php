<?php
session_start();
$conn = mysqli_connect('localhost','root','') or die(mysqli_error());//connection to the database
$db_select=mysqli_select_db($conn,'easy_booking') or die(mysqli_error());//select database
//get id of admin to deleted
 $TicketNo = $_GET['TicketNo'];
 $fileName = $_GET['fileName'];

 $path = "../../../easybooking/slip/". $fileName;

 unlink($path); //delete files

 // sql for delete

 $sql = "DELETE FROM ticket WHERE TicketNo='$TicketNo'";
 $res = mysqli_query($conn, $sql);

 if($res==1) //check sql succsses
    {
        //session variables for display msg
        $_SESSION['del']="<p class='error'>Payment Delete is Success!</p>";

        //redirect page
        header('location:'.'./manage-payment.php');
    }
    else
    {
         //session variables for display msg
         $_SESSION['del']="<p class='error'>Payment Delete is Faild!</p>";

         //redirect page
         header('location:'.'./manage-payment.php');
    }
?>