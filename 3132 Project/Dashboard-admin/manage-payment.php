<?php include('../menu/menu.php'); ?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<div class="main">
    <main>
        <hgroup>
            <h2>Manage Payments</h2>
        </hgroup>
        <br>
            <?php //desplay sesson msg
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
                    <th>TICKET NO</th>
                    <th>CUSTOMER ID</th>
                    <th>CUSTOMER NAME</th>
                    <th>ROUTE NO</th>
                    <th>PRICE</th>
                    <th>PAYMENT SLIP</th>
                    <th>ACTION</th>

                </tr>
                <?php 
                    //get and display datas
                        $sql="SELECT * FROM ticket";
                    

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
                                    $TicketNo=$rows['TicketNo'];                 //pass the colem name in database
                                    $custid=$rows['custId'];
                                    $custName=$rows['custName'];
                                    $routeNo=$rows['routeNo'];
                                    $price=$rows['price'];
                                    $fileName=$rows['image'];

                                    // we have to add these to HTML table so we have to breake the php, here and write the html for table row
                                    ?>

                                            <tr>
                                                <td> <?php echo $TicketNo  ?> </td>
                                                <td> <?php echo $custid  ?> </td>
                                                <td> <?php echo $custName  ?> </td>
                                                <td> <?php echo $routeNo  ?> </td>
                                                <td> <?php echo $price  ?> </td>
                                                <td> <a href="<?php echo "../../../easybooking/slip/". $fileName?>" class="btn-viwe" target="_thapa">View</a>  </td>
                                                <td>
                                                    <a href="../Dashboard-admin/delete-pay.php?TicketNo=<?php echo $TicketNo; ?>&fileName=<?php echo $fileName ?>" class="btn-danger">Delete</a> 
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