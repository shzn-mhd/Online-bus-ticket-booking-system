<?php include('../menu/menu.php');?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<div class="main">
<h2>Update Bus Route</h2>
<br> 
<p class="error">
    <?php
      if(isset($_SESSION['update']))
      {
         echo $_SESSION['update'];
         unset($_SESSION['update']);
      }
?>
    </p>
    <?php
                    //get the nic of admin
                    $routeNo = $_GET['routeNo'];

                    //sql
                    $sql="SELECT * FROM bus WHERE routeNo='$routeNo'";
                    $res=mysqli_query($conn, $sql);

                    if($res==true)
                    {
                        $count = mysqli_num_rows($res);
                        if($count==1)
                        {
                            //get details
                            $row = mysqli_fetch_assoc($res);

                            $routeNo = $row['routeNo']; //we have to place the exsact name in database collem
                            $busNo = $row['busNo'];
                            $origin = $row['origin'];
                            $destin = $row['destin'];
                            $date = $row['date'];
                            $time = $row['time'];

                        }
                        else
                        {
                            //rederect to manage admin page
                            header('location:'.'../Dashboard-admin/manage-bus.php');
                        }
                    }
                ?>
            <form action="" method="post">
                <table class="tbl-2">
                    <tr>   
                        <td>Routes No</td>
                        <td><input type="text" name="routeNo" value="<?php echo $routeNo ?> " readonly></td>
                    </tr>
                    <tr>   
                        <td>Bus No</td>
                        <td><input type="text" name="busNo" value="<?php echo $busNo ?>"></td>
                    </tr>
                    <tr>   
                        <td>Origin</td>
                        <td><input type="text" name="origin" value="<?php echo $origin ?>"></td>
                    </tr>
                    <tr>   
                        <td>Destination</td>
                        <td><input type="text" name="destination" value="<?php echo $destin ?>"></td>
                    </tr>
                    <tr>   
                        <td>Date</td>
                        <td><input type="date" name="date" value="<?php echo $date ?>"></td>
                    </tr>
                    <tr>   
                        <td>Time</td>
                        <td><input type="time" name="time" value="<?php echo $time ?>"></td>
                    </tr>
                    <tr>   
                        <td colspan="2"><input type="submit" name="submit" value="Update" class="btn-second"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

<?php 

        //check button click
        if(isset($_POST['submit']))
        {
            //get all valuse from form
            $routeNo=$_POST['routeNo'];
            $busNo=$_POST['busNo'];
            $origin=$_POST['origin'];
            $destination=$_POST['destination'];
            $date=$_POST['date'];
            $time=$_POST['time'];

            //sql
            $sql = "UPDATE bus SET
            busNo = '$busNo',
            origin = '$origin',
            destin = '$destination',
            date = '$date',
            time = '$time'
            WHERE routeNo='$routeNo'
            ";

            $res = mysqli_query($conn, $sql);//run sql
            if($res==true) //check sql succsses
            {
                //session variables for display msg
                $_SESSION['update']="<p class='success'>Route Update successfully</P>";

                //redirect page
                //header('location:'.'./manage-bus.php');
                echo "<script> window.location.href = './manage-bus.php' </script>";
            }
            else
            {
                //session variables for display msg
                $_SESSION['update']="<p class='error'>Route Update is Faild</p>";

                //redirect page
                //header('location:'.'./update-bus.php');
                echo "<script> window.location.href = './update-bus.php' </script>";
            }
        }
?>
</div>
<?php include('../menu/footer.php'); ?>