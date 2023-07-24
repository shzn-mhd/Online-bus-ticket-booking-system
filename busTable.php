<?php include('menu.php'); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Departure List</title>
  <link rel="stylesheet" href="./styleTable.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

<?php 
    $nic= $_GET['nic'];
    $sql2="SELECT datee,origin,destination FROM customer Where nic='$nic';";
    $res2=mysqli_query($conn, $sql2);

    if($res2==true)
    {
        $count2= mysqli_num_rows($res2);

        if($count2>0){
            while($rows2=mysqli_fetch_assoc($res2)){

                $Fdate=$rows2['datee'];
                $Fori=$rows2['origin'];
                $Fdes=$rows2['destination'];
            
            }
        }
    }
?>

<div class="departure-list">    
        <div class="departure-heading">
            <h2>Departure List</h2>
        </div>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>
                            <strong>Route No</strong>
                        </th>
                        <th>
                            <strong>Bus No</strong>
                        </th>
                        <th>
                            <strong>Origin</strong>
                        </th>
                        
                        <th>
                            <strong>Destination</strong>
                        </th>
                        <th>
                            <strong>Date</strong>
                        </th>
                        <th>
                            <strong>Time</strong>
                        </th>
                        <th>
                            <strong>Action</strong>
                        </th>
                    </tr>
                </thead>
                
                </thead>

                <?php

    $sql="SELECT * FROM bus Where date = '$Fdate' and origin = '$Fori' and destin = '$Fdes';";
    $res=mysqli_query($conn, $sql);

    if($res==true)
    {
        $count= mysqli_num_rows($res);

        if($count>0){
            while($rows=mysqli_fetch_assoc($res)){

                $routeNo=$rows['routeNo'];
                $busNo=$rows['busNo'];
                $origin=$rows['origin'];
                $destin=$rows['destin'];
                $date=$rows['date'];
                $time=$rows['time'];
                ?>
                 <tbody>
                    <tr>
                        <td data-title="regnum">
                            <?php echo $routeNo ?>
                        </td>
                        <td data-title="Trip">
                            <?php echo $busNo ?>

                        </td>
                        <td data-title="Trip Dates">
                            <?php echo $origin ?>
                        </td>
                        
                        <td data-title="Space Left">
                            <?php echo $destin ?>
                        </td>

                        <td>
                            <?php echo $date ?>
                        </td>
                        <td>
                        <?php echo $time ?>
                        </td>

                        <td>
                            <a href="seats.php?routeNo=<?php echo $routeNo ?>&nic=<?php echo $nic ?>" title="Book Now" class="btn-book">Select</a>
                        </td>

                    </tr>

                <?php
            }

        }
    }
    ?>
               

            </table>
            
        </div>

      

    </div>

    <a href="customerdetails.php"> <button type="submit" class="btn btn-danger">Go Back</button> </a> 

    <script src="" async defer></script>
    

  
</body>
</html>



