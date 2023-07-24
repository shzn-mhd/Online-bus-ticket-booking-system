<?php include('menu.php'); ?>
<?php
      $routeNo = $_GET['routeNo'];
      $nic = $_GET['nic'];
      $seatsDB=$_GET['seatsDB'];
      $seats=unserialize(base64_decode($seatsDB));

      $sql="SELECT * FROM customer Where nic = '$nic';";
      $res=mysqli_query($conn, $sql);

      if($res==true)
      {
          $count= mysqli_num_rows($res);

          if($count>0){
              while($rows=mysqli_fetch_assoc($res)){

                  $cusName=$rows['full_name'];
                  $email=$rows['email'];
                  $date=$rows['datee'];
                  $origin=$rows['origin'];
                  $destin=$rows['destination'];
                  
              }
            }
          }
        
          $sql2="SELECT * FROM bus Where routeNo = '$routeNo';";
          $res2=mysqli_query($conn, $sql2);

      if($res2==true)
      {
          $count2= mysqli_num_rows($res2);

          if($count2>0){
              while($rows2=mysqli_fetch_assoc($res2)){

                  $routeNo=$rows2['routeNo'];
              }
            }
          }

          
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Booking Final
        </title>

        <link rel="stylesheet" href="./bookingFinal.css">

    </head>
    <body>
        <h1>Proceed Your Payments</h1>

        <table>
            <thead class="payment">
                <tr>
                    <th>
                        <strong>Seats Booked</strong>
                    </th>
                    <th>
                        <strong>Amount</strong>
                    </th>
                </tr>
            </thead>
            <?php 
            //price
                $a=1200.00;
                $b=1000.00;
                $d=800.00;
                $e=900.00;
                $f=1200.00;
                $tot=0;
                foreach($seats as $item){
                ?>
                <tr class="tdata">
                <td><?php echo $item;?> </td>
                <td> <?php if(strpos($item,"A")){
                    echo $a;
                    $tot=$tot+$a;
                }elseif(strpos($item,"B")){
                    echo $b;
                    $tot=$tot+$b;
                }elseif(strpos($item,"D")){
                    echo $d;
                    $tot=$tot+$d;
                }elseif(strpos($item,"E")){
                    echo $e;
                    $tot=$tot+$e;
                }elseif(strpos($item,"F")){
                    echo $f;
                    $tot=$tot+$f;
                }
                ?></td>
                </tr>
                <?php  
                }
                ?>
            
            <tr class="tdata">
                <td><b>Total</b></td>
                <td><b><?php echo $tot."/=";?></b></td>
            </tr>
        </table>

        <br>
        <table>
            <thead class="payment">
                <tr>
                    <th>
                        <strong>Bank Details</strong>
                    </th>
                </tr>
            </thead>

            <tr class="tdata">
                <td> 
                    <ul>
                        <li>Bank: BOC Kandy Branch</li>
                        <li>A/C No: 201874657</li>
                        <li>Name: Easy Booking Travel Agency</li>
                    </ul>    
                </td>
        
            </tr>

        </table>

    </div>
    <br>

    <form method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Booking Information</legend>
                <label>Cutomer Name:   <?php echo $cusName ?></label><br>
                <label>Customer email:   <?php echo $email ?></label><br>
                <label>Travel Date:   <?php echo $date ?></label><br>
                <label>Travel Origin:   <?php echo $origin ?></label><br>
                <label>Travel Destination:   <?php echo $destin ?></label><br>
                <label>Upload your payment proof: </label>
                <input type="file" id="slip" name="slip" required><br>
                <input type="submit" name="submit" class="save" required>
                
        </fieldset>
</form>
<div class="proceed">
<a href="seats.php?routeNo=645485&nic=56356" > <button type="submit" class="back">Back</button></a>
<a href="success.php"> <button  type="submit">Proceed</button></a>
</div>
    </body>
</html>
<?php 

//save to database

if(isset($_POST['submit']))
{
    $fileName = $_FILES['slip']['name'];
    $tempName = $_FILES['slip']['tmp_name'];

    $uploadFolder = 'slip/';

    $fileUploaded = move_uploaded_file($tempName,$uploadFolder.$fileName);

    //sql for save
    $sql3="INSERT INTO Ticket(custId,custName,routeNo,price,image,seats) VALUES('$nic','$cusName','$routeNo','$tot','$fileName','$seatsDB');";
    // execute sql
    $res3=mysqli_query($conn, $sql3);

    //change routes table booked seats
    $sql4="SELECT seats FROM bus where routeNo='$routeNo';";
    $res4=mysqli_query($conn, $sql4);
    $rows4=mysqli_fetch_assoc($res4);

    $seatsBusDB=$rows4['seats'];
    $seatsBus=unserialize(base64_decode($seatsBusDB));

    foreach($seats as $item){
        array_push($seatsBus,$item);
    }

    $seatsBusDB=base64_encode(serialize($seatsBus));

    $sql5="UPDATE bus set seats='$seatsBusDB' where routeNo='$routeNo';";
    $res5=mysqli_query($conn, $sql5);
}

?>