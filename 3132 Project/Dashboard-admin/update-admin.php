<?php include('../menu/menu.php'); ?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<div class="main">
<h2>Update Admin</h2>
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
                    $userName = $_GET['userName'];

                    //sql
                    $sql="SELECT * FROM admin WHERE userName='$userName'";
                    $res=mysqli_query($conn, $sql);

                    if($res==true)
                    {
                        $count = mysqli_num_rows($res);
                        if($count==1)
                        {
                            //get details
                            $row = mysqli_fetch_assoc($res);

                            $name = $row['name']; //we have to place the exsact name in database collem
                            $userName = $row['userName'];
                        }
                        
                    }
                ?>
            <form action="" method="post">
                <table class="tbl-2">
                    <tr>   
                        <td>User Name</td>
                        <td><input type="text" name="userName" value="<?php echo $userName ?>"readonly></td>
                    </tr>
                    <tr>   
                        <td>Full Name</td>
                        <td><input type="text" name="name" value="<?php echo $name ?>"></td>
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
            $name=$_POST['name'];
            
            //sql
            $sql2 = "UPDATE admin SET
            name = '$name'
            WHERE userName='$userName';
            ";

            $res2 = mysqli_query($conn, $sql2);//run sql
            if($res2==true) //check sql succsses
            {
                //session variables for display msg
                $_SESSION['update']="<p class='success'>Admin Update successfully</P>";

                //redirect page
                //header('location:'.'./manage-bus.php');
                echo "<script> window.location.href = './settings.php' </script>";
            }
            else
            {
                //session variables for display msg
                $_SESSION['update']="<p class='error'>Admin Update is Faild</p>";

                //redirect page
                //header('location:'.'./update-bus.php');
                echo "<script> window.location.href = './settings.php' </script>";
            }
        }
?>
</div>
<?php include('../menu/footer.php'); ?>
               