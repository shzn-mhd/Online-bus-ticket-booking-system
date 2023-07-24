<?php include('../menu/menu.php'); ?>
<head>
<link rel="stylesheet" href="style.css">
</head>    
<div class="main">
        <main>
            <hgroup>
              <h1>Dashboard</h1>
            </hgroup>
            
            <p class="success">
            <?php
                if(isset($_SESSION['log']))
                {
                  echo $_SESSION['log'];
                  unset($_SESSION['log']);
                }
              ?>
            </p>
            
           
              <br><br>
            <section class="sec">
              <dl>
                <dt>Routes</dt>
                <dd>
                  <?php
                    $sql="SELECT * FROM bus; ";
                    $res=mysqli_query($conn,$sql);
                    if($tot=mysqli_num_rows($res))
                    {
                      echo $tot;
                    }
                    else{
                      echo '0';
                    }
                  ?>  

                </dd>
              </dl>
              <dl>
                <dt>Bookings</dt>
                <dd>
                <?php
                    $sql="SELECT * FROM customer; ";
                    $res=mysqli_query($conn,$sql);
                    if($tot=mysqli_num_rows($res))
                    {
                      echo $tot;
                    }
                    else{
                      echo '0';
                    }
                  ?> 
                </dd>
              </dl>
              <dl>
                <dt>Paid User</dt>
                <dd>
                <?php
                    $sql="SELECT * FROM customer where status='Paid'; ";
                    $res=mysqli_query($conn,$sql);
                    if($tot=mysqli_num_rows($res))
                    {
                      echo $tot;
                    }
                    else{
                      echo '0';
                    }
                  ?> 
                </dd>
              </dl>
              <dl>
                <dt>Unpaid User</dt>
                <dd><?php
                    $sql="SELECT * FROM customer where status='Unpaid'; ";
                    $res=mysqli_query($conn,$sql);
                    if($tot=mysqli_num_rows($res))
                    {
                      echo $tot;
                    }
                    else{
                      echo '0';
                    }
                  ?> </dd>
              </dl>
            </section>
           
          </main>
    </div>
    
</body>
</html>
<?php include('../menu/footer.php'); ?>