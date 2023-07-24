<?php include('../menu/menu.php'); ?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<div class="main">
    <main>
        <hgroup>
            <h2>Manage Bus Routes</h2>
        </hgroup>
        <br>
        <a href="add-bus.php" class="btn-primary">Add Bus Routes</a>
        <br>
        <br>
            <?php //desplay sesson msg
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']); //delete the sesson msg
                    }
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']); //delete the sesson msg
                    }
                ?>	
            
                <?php
                if(isset($_SESSION['del']))
                {
                    echo $_SESSION['del'];
                    unset($_SESSION['del']);
                }
                ?>
        <div>
            <table class="tbl" >
                <tr>
                    <th>ROUTES NO</th>
                    <th>BUS NO</th>
                    <th>ORIGIN</th>
                    <th>DESTINATION</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>BOOKED SEATS</th>
                    <th>ACTION</th>

                </tr>
                <?php 
                    //get and display datas
                        $sql="SELECT * FROM bus";
                    

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
                                    $routeNo=$rows['routeNo'];                 //pass the colem name in database
                                    $busNo=$rows['busNo'];
                                    $origin=$rows['origin'];
                                    $destin=$rows['destin'];
                                    $date=$rows['date'];
                                    $time=$rows['time'];
                                    $seatsDB=$rows['seats'];

                                    $seats=unserialize(base64_decode($seatsDB));

                                    // we have to add these to HTML table so we have to breake the php, here and write the html for table row
                                    ?>

                                            <tr>
                                                <td> <?php echo $routeNo  ?> </td>
                                                <td> <?php echo $busNo  ?> </td>
                                                <td> <?php echo $origin  ?> </td>
                                                <td> <?php echo $destin  ?> </td>
                                                <td> <?php echo $date  ?> </td>
                                                <td> <?php echo $time  ?> </td>
                                                <td> <?php foreach($seats as $item){
                                                    echo $item.",";
                                                } ?> </td>
                                                <td>
                                                    <a href="../Dashboard-admin/update-bus.php?routeNo=<?php echo $routeNo; ?>" class="btn-second">Update</a> 
                                                    <a href="../Dashboard-admin/delete-bus.php?routeNo=<?php echo $routeNo; ?>" class="btn-danger">Delete</a> 
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