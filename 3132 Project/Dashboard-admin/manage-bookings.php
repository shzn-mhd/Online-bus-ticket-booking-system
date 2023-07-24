<?php include('../menu/menu.php'); ?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<div class="main">
<main>
        <hgroup>
            <h2>Manage Bookings</h2>
        </hgroup>
        <?php
                if(isset($_SESSION['del']))
                {
                    echo $_SESSION['del'];
                    unset($_SESSION['del']);
                }
                ?>
                 <?php //desplay sesson msg

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']); //delete the sesson msg
                    }
                ?>	
                <?php //desplay sesson msg

                    if(isset($_SESSION['email']))
                    {
                        echo $_SESSION['email'];
                        unset($_SESSION['email']); //delete the sesson msg
                    }
                    ?>
        <div>
            <table class="tbl" >
                <tr>
                    <th>BOOKING CODE</th>
                    <th>CUSTOMER NAME</th>
                    <th>DATE</th>
                    <th>ORIGIN</th>
                    <th>DESTINATION</th>
                    <th>EMAIL</th>
                    <th>STATUS</th>
                    <th>ACTION</th>

                </tr>
                <?php 
                    //get and display datas
                        $sql="SELECT * FROM customer";
                    

                        $res=mysqli_query($conn, $sql);
                      

                        if($res==true)
                        {
                            //count rows
                            $count= mysqli_num_rows($res);//function to get count of= rows
                            

                            if($count>0)
                            {
                                while($rows=mysqli_fetch_assoc($res))//get all the rows in database and store
                                {
                                    //get from table
                                    $nic=$rows['nic'];                 //pass the colem name in database
                                    $full_name=$rows['full_name'];
                                    $datee=$rows['datee'];
                                    $origin=$rows['origin'];
                                    $destination=$rows['destination'];
                                    $email=$rows['email'];
                                    $status=$rows['status'];

                                    // we have to add these to HTML table so we have to breake the php, here and write the html for table row
                                    ?>

                                            <tr>
                                                <td> <?php echo $nic  ?> </td>
                                                <td> <?php echo $full_name  ?> </td>
                                                <td> <?php echo $datee  ?> </td>
                                                <td> <?php echo $origin  ?> </td>
                                                <td> <?php echo $destination  ?> </td>
                                                <td> <?php echo $email  ?> </td>
                                                <td> <?php 
                                                        if($status=="Paid"){
                                                            echo "<div class='btn-paid'>Paid</div>";
                                                        }
                                                        elseif($status=="Unpaid"){
                                                            echo "<div class='btn-Unpaid'>Unpaid</div>";
                                                        }
                                                        ?>
                                                    
                                                </td>
                                                <td>
                                                    <a href="../Dashboard-admin/update-cus.php?nic=<?php echo $nic; ?>" class="btn-viwe">View</a> 
                                                    <a href="../Dashboard-admin/send-email.php?nic=<?php echo $nic; ?>" class="btn-send">Send Ticket</a> 
                                                    <a href="../Dashboard-admin/delete-cus.php?nic=<?php echo $nic; ?>" class="btn-danger">Delete</a> 
                                                </td>
                                            </tr>             

                                    <?php
                                }
                            }
                            
                        }
                    ?>
            </table>
            
        </div>
            
    </main>
    
</div>
<?php include('../menu/footer.php'); ?>