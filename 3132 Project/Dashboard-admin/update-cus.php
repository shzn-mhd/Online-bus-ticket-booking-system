<?php include('../menu/menu.php');?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<div class="main">
<h2>View Customer Details</h2>
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
                    $nic = $_GET['nic'];

                    //sql
                    $sql="SELECT * FROM customer WHERE nic='$nic'";
                    $res=mysqli_query($conn, $sql);

                    if($res==true)
                    {
                        $count = mysqli_num_rows($res);
                        if($count==1)
                        {
                            //get details
                            $row = mysqli_fetch_assoc($res);

                            $nic = $row['nic']; //we have to place the exsact name in database collem
                            $name = $row['full_name'];
                            $email = $row['email'];
                            $address = $row['addresss'];
                            $contact = $row['contactNo'];
                            $origin = $row['origin'];
                            $destin = $row['destination'];
                            $date = $row['datee'];
                            $status = $row['status'];

                        }
                        else
                        {
                            //rederect to manage admin page
                            header('location:'.'../Dashboard-admin/manage-bookings.php');
                        }
                    }
                ?>
            <form action="" method="post">
                <table class="tbl-2">
                    <tr>   
                        <td>NIC</td>
                        <td><input type="text" name="nic" value="<?php echo $nic ?> " readonly></td>
                    </tr>
                    <tr>   
                        <td>Name</td>
                        <td><input type="text" name="name" value="<?php echo $name ?>" ></td>
                    </tr>
                    <tr>   
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?php echo $email ?>" ></td>
                    </tr>
                    <tr>   
                        <td>Address</td>
                        <td><input type="text" name="address" value="<?php echo $address ?>" ></td>
                    </tr>
                    <tr>   
                        <td>Contact No</td>
                        <td><input type="text" name="contact" value="<?php echo $contact ?>" ></td>
                    </tr>
                    <tr>   
                        <td>Origin</td>
                        <td><input type="text" name="origin" value="<?php echo $origin ?>" ></td>
                    </tr>
                    <tr>   
                        <td>Destination</td>
                        <td><input type="text" name="destin" value="<?php echo $destin ?>" ></td>
                    </tr>
                    <tr>   
                        <td>Date</td>
                        <td><input type="date" name="date" value="<?php echo $date ?>" ></td>
                    </tr>
                    <tr>   
                        <td>Status</td>
                        <td><select name="status" >
                                <option value="Unpaid">Unpaid</option>
                                <option value="Paid">Paid</option>
                            </select>
                        </td>
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
            $nic=$_POST['nic'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $contact=$_POST['contact'];
            $name=$_POST['name'];
            $origin=$_POST['origin'];
            $destin=$_POST['destin'];
            $date=$_POST['date'];
            $status=$_POST['status'];
            
            

            //sql
            $sql = "UPDATE customer SET
            full_name = '$name',
            email = '$email',
            addresss = '$address',
            contactNo = '$contact',
            origin = '$origin',
            destination = '$destin',
            datee = '$date',
            status = '$status'
            WHERE nic='$nic'
            ";

            $res = mysqli_query($conn, $sql);//run sql
            if($res==true) //check sql succsses
            {
                //session variables for display msg
                $_SESSION['update']="<p class='success'>Costomer Update successfully</P>";

                //redirect page
                //header('location:'.'./manage-bookings.php');
                echo "<script> window.location.href = './manage-bookings.php' </script>";
            }
            else
            {
                //session variables for display msg
                $_SESSION['update']="<p class='error'>Route Update is Faild</p>";

                //redirect page
                //header('location:'.'./update-cus.php');
                echo "<script> window.location.href = './update-cus.php' </script>";
            }
        }
?>
</div>
<?php include('../menu/footer.php'); ?>