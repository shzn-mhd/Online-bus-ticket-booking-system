<?php include('../menu/menu.php'); ?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<div class="main">
    
        <h2>Settings</h2>
    
    
                <?php //desplay sesson msg
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']); //delete the sesson msg
                    }
                    if(isset($_SESSION['change']))
                    {
                        echo $_SESSION['change'];
                        unset($_SESSION['change']); //delete the sesson msg
                    }
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']); //delete the sesson msg
                    }
                    if(isset($_SESSION['del']))
                {
                    echo $_SESSION['del'];
                    unset($_SESSION['del']);
                }
                ?>
        <br>
        <a href="add-admin.php" class="btn-primary">Add New Admin</a>
        <br><br>

        <div>
            <table class="tbl" >
                <tr>
                    <th>ADMIN NAME</th>
                    <th>USER NAME</th>
                    <th>ACTION</th>

                </tr>
                <?php 
                    //get and display datas
                        $sql="SELECT * FROM admin";
                    
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
                                    $name=$rows['name'];                 //pass the colem name in database
                                    $userName=$rows['userName'];

                            // we have to add these to HTML table so we have to breake the php, here and write the html for table row
                                    ?>

                                            <tr>
                                                <td> <?php echo $name  ?> </td>
                                                <td> <?php echo $userName  ?> </td>
                                                <td>
                                                    <a href="../Dashboard-admin/change-pw-admin.php?userName=<?php echo $userName; ?>" class="btn-viwe">Change Password</a> 
                                                    <a href="../Dashboard-admin/update-admin.php?userName=<?php echo $userName; ?>" class="btn-second">Update</a> 
                                                    <a href="../Dashboard-admin/delete-admin.php?userName=<?php echo $userName; ?>" class="btn-danger">Delete</a> 
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