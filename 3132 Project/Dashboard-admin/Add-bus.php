<?php include('../menu/menu.php'); ?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<div class="main">
    
        <h2>Add Bus Route</h2>
        <br>
    
                <?php //desplay sesson msg
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']); //delete the sesson msg
                    }
                
                ?>
            
                
        <form method="POST">
            <table class="tbl-2" >
                <tr>   
                    <td>Routes No</td>
                    <td><input type="text" name="routeNo"></td>
                </tr>
                <tr>   
                    <td>Bus No</td>
                    <td><input type="text" name="busNo"></td>
                </tr>
                <tr>   
                    <td>Origin</td>
                    <td><input type="text" name="origin"></td>
                </tr>
                <tr>   
                    <td>Destination</td>
                    <td><input type="text" name="destination"></td>
                </tr>
                <tr>   
                    <td>Date</td>
                    <td><input type="date" name="date"></td>
                </tr>
                <tr>   
                    <td>Time</td>
                    <td><input type="time" name="time"></td>
                </tr>
                <tr>   
                    <td colspan="2"><input type="submit" name="submit" value="Add" class="btn-second"></td>
                </tr>
            </table>
        </form>
</div>


<?php 

//save to database

if(isset($_POST['submit']))
{
    //button click
    //get data from form
    $routeNo=$_POST['routeNo'];
    $busNo=$_POST['busNo'];
    $origin=$_POST['origin'];
    $destination=$_POST['destination'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $seats=array("1F");

    $seatsDB=base64_encode(serialize($seats));

    //sql for save
    $sql="INSERT INTO bus VALUES('$routeNo','$busNo','$origin','$destination','$date','$time','$seatsDB');";
    

    // execute sql
    $res=mysqli_query($conn, $sql) or die(mysqli_error());
    

    if($res==true) //check sql succsses
    {
        //session variables for display msg
        $_SESSION['add']="<p class='success'>Route added successfully</p>";

        //redirect page
        //header('location:'.'./manage-bus.php');
        echo "<script> window.location.href = './manage-bus.php' </script>";
    }
    else
    {
         //session variables for display msg
         $_SESSION['add']="<p class='error'>Route added is Faild</p>";

         //redirect page
         //header('location:'.'./add-bus.php');
         echo "<script> window.location.href = './add-bus.php' </script>";
    }
}

?>
<?php include('../menu/footer.php'); ?>