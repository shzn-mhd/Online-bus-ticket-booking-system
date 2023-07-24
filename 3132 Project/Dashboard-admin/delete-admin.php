<?php
session_start();
$conn = mysqli_connect('localhost','root','') or die(mysqli_error());//connection to the database
$db_select=mysqli_select_db($conn,'easy_booking') or die(mysqli_error());//select database
//get id of admin to deleted
 $userName = $_GET['userName'];

 // sql for delete

 $sql = "DELETE FROM admin WHERE userName='$userName'";
 $res = mysqli_query($conn, $sql);

 if($res==1) //check sql succsses
    {
        //session variables for display msg
        $_SESSION['del']="<p class='error'>Admin Delete is Success!</p>";

        //redirect page
        header('location:'.'./settings.php');
    }
    else
    {
         //session variables for display msg
         $_SESSION['del']="<p class='error'>Admin Delete is Faild!</p>";

         //redirect page
         header('location:'.'./settings.php');
    }
?>