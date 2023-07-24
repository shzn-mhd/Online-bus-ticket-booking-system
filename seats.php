<?php include('menu.php'); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Seat Booking</title>
  <link rel="stylesheet" href="./styleSeats.css">


</head>
<body>
  <section>
    <dl class="instruction">
    <h3 class="ins">Instructions</h3>
    <ul class="unorder">
      <li>Bookings cannot be canceled</li>
      <li>After booking you have to pay the amount and upload the slip into our site</li>
      <li>A person can book any amount of seats</li>

    </ul> 
    <div>
    <h4 class="ins">Selected Bus</h4>
    <?php
      $routeNo = $_GET['routeNo'];
      $nic = $_GET['nic'];

      $sql="SELECT * FROM bus Where routeNo = '$routeNo';";
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
              }
            }
          }
      ?>
      <ul>
        <li>Route No - <?php echo $routeNo ?></li>
        <li>Bus No - <?php echo $busNo ?></li>
        <li>Origin - <?php echo $origin ?></li>
        <li>Destination - <?php echo $destin ?></li>
        <li>Date - <?php echo $date ?></li>
        <li>Time - <?php echo $time ?></li>
      </ul>
    </div>
    <h4 class="ins">Seats Price</h4>
    <ul>
      <li>A - Rs. 1200.00</li>
      <li>B - Rs. 1000.00</li>
      <li>D - Rs. 800.00</li>
      <li>E - Rs. 900.00</li>
      <li>F - Rs. 1200.00</li>
    </ul>
    <form action="" method="post">
    <div class="btn">
      
      <button name="submit">  Proceed  </button> 
    </div>
    
    </dl>
    <dl class="bus">
      <div class="screen-side">
        <div class="screen">Wind Screen</div>
        <h3 class="select-text">Please select your seats</h3>
      </div>
     
      <ol class="cabin">
    <li class="row row--1">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="1A" name="seats[]" value="1A"    
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='1A'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          
          />
          <label for="1A">1A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1B" name="seats[]" value="1B" 
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='1B'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="1B">1B</label>
        </li>
        
        <li class="seat">
          <input type="checkbox"  id="1D" name="seats[]" value="1D"
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='1D'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="1D">1D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1E" name="seats[]" value="1E"
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='1E'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="1E">1E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1F"  name="seats[]"value="1F"
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='1F'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="1F">1F</label>
        </li>
      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="2A" name="seats[]"value="2A"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='2A'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="2A">2A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2B" name="seats[]"value="2B"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='2B'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="2B">2B</label>
        </li>
        
        <li class="seat">
          <input type="checkbox" id="2D" name="seats[]"value="2D"
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='2D'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="2D">2D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2E" name="seats[]"value="2E"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='2E'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="2E">2E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2F" name="seats[]"value="2F"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='2F'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="2F">2F</label>
        </li>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="3A" name="seats[]"value="3A"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='3A'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="3A">3A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3B" name="seats[]"value="3B"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='3B'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="3B">3B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3D" name="seats[]"value="3D"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='3D'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="3D">3D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3E" name="seats[]"value="3E"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='3E'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="3E">3E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3F" name="seats[]"value="3F"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='3F'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="3F">3F</label>
        </li>
      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="4A" name="seats[]"value="4A"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='4A'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="4A">4A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4B" name="seats[]"value="4B"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='4B'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="4B">4B</label>
        </li>
        
        <li class="seat">
          <input type="checkbox" id="4D" name="seats[]"value="4D"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='4D'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="4D">4D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4E" name="seats[]"value="4E"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='4E'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="4E">4E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4F" name="seats[]"value="4F"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='4F'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="4F">4F</label>
        </li>
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="5A" name="seats[]"value="5A"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='5A'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="5A">5A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5B" name="seats[]"value="5B"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='5B'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="5B">5B</label>
        </li>
        
        <li class="seat">
          <input type="checkbox" id="5D" name="seats[]"value="5D"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='5D'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="5D">5D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5E" name="seats[]"value="5E"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='5E'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="5E">5E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5F" name="seats[]"value="5F"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='5F'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="5F">5F</label>
        </li>
      </ol>
    </li>
    <li class="row row--6">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="6A" name="seats[]"value="6A"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='6A'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="6A">6A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6B" name="seats[]"value="6B"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='6B'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="6B">6B</label>
        </li>
        
        <li class="seat">
          <input type="checkbox" id="6D" name="seats[]"value="6D"
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='6D'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="6D">6D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6E" name="seats[]"value="6E"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='6E'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="6E">6E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6F" name="seats[]"value="6F"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='6F'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="6F">6F</label>
        </li>
      </ol>
    </li>
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="7A" name="seats[]"value="7A"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='7A'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="7A">7A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7B" name="seats[]"value="7B"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='7B'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="7B">7B</label>
        </li>
        
        <li class="seat">
          <input type="checkbox" id="7D" name="seats[]"value="7D"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='7D'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="7D">7D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7E" name="seats[]"value="7E"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='7E'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="7E">7E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7F" name="seats[]"value="7F"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='7F'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="7F">7F</label>
        </li>
      </ol>
    </li>
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="8A" name="seats[]"value="8A"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='8A'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="8A">8A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8B" name="seats[]"value="8B"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='8B'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="8B">8B</label>
        </li>
        
        <li class="seat">
          <input type="checkbox" id="8D" name="seats[]"value="8D"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='8D'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="8D">8D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8E" name="seats[]"value="8E"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='8E'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="8E">8E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8F" name="seats[]"value="8F"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='8F'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="8F">8F</label>
        </li>
      </ol>
    </li>
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="9A" name="seats[]"value="9A"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='9A'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="9A">9A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9B" name="seats[]"value="9B"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='9B'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="9B">9B</label>
        </li>
        
        <li class="seat">
          <input type="checkbox" id="9D" name="seats[]"value="9D"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='9D'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="9D">9D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9E" name="seats[]"value="9E"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='9E'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="9E">9E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9F" name="seats[]"value="9F"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='9F'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="9F">9F</label>
        </li>
      </ol>
    </li>
    <li class="row row--10">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="10A" name="seats[]"value="10A"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='10A'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="10A">10A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10B" name="seats[]"value="10B"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='10B'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="10B">10B</label>
        </li>
        
        <li class="seat">
          <input type="checkbox" id="10D" name="seats[]"value="10D"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='10D'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="10D">10D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10E" name="seats[]"value="10E"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='10E'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="10E">10E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10F" name="seats[]"value="10F"
          
          <?php 
              $sql="SELECT seats FROM bus Where routeNo = '$routeNo';";
                        

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
                          $seatsDB=$rows['seats'];                 //pass the colem name in database
                          $seats=unserialize(base64_decode($seatsDB));

                          foreach($seats as $item){
                            if($item=='10F'){
                              echo 'disabled';
                              
                            }
                          }
                      }
                  }
                  
              }
        
          ?>
          />
          <label for="10F">10F</label>
        </li>
      </ol>
    </li>
  </ol>
  </form>    
    </dl>
  </section>

</body>
</html>

<?php
  if(isset($_POST['submit'])){
    $seats=$_POST['seats'];
    $seatsDB=base64_encode(serialize($seats));
  

    echo "<script> window.location.href = './bookingFinal.php?routeNo=$routeNo&nic=$nic&seatsDB=$seatsDB' </script>";
  }
?>
