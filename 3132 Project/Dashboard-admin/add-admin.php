<?php include('../menu/menu.php'); ?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<div class="main">
    
        <h2>Add Admin</h2>
        <br>
    
                <?php //desplay sesson msg
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']); //delete the sesson msg
                    }
                  
                ?>
            
                
        <form method="POST">
            <table class="tbl-2" >
                <tr>   
                    <td>Full Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>   
                    <td>User Name</td>
                    <td><input type="text" name="userName"></td>
                </tr>
                <tr>   
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>   
                    <td>Conform Password</td>
                    <td><input type="password" name="confPassword"></td>
                </tr>
                <tr>   
                    <td colspan="2"><input type="submit" name="submit" value="Add" class="btn-second"></td>
                </tr>
            </table>
        </form>
</div>


<?php 

//save to database

if(isset($_POST['submit']))
{
    //button click
    //get data from form
    $name=$_POST['name'];
    $userName=$_POST['userName'];
    $password=md5($_POST['password']);
    $confPassword=md5($_POST['confPassword']);

   if($password==$confPassword){

    $sql="INSERT INTO admin VALUES('$name','$userName','$password');";
    $res=mysqli_query($conn, $sql) or die(mysqli_error());

    if($res==true) //check sql succsses
    {
        //session variables for display msg
        $_SESSION['add']="<p class='success'>Admin added successfully</p>";

        //redirect page
        //header('location:'.'./manage-bus.php');
        echo "<script> window.location.href = './settings.php' </script>";
    }
    else
    {
         //session variables for display msg
         $_SESSION['add']="<p class='error'>Admin added is Faild</p>";

         //redirect page
         //header('location:'.'./add-bus.php');
         echo "<script> window.location.href = './add-admin.php' </script>";
    }
   }else{
    //session variables for display msg
    $_SESSION['add']="<p class='error'>New Password and Conform Password Don't Match!</p>";
                    
    //redirect page
    header('location:'.'./add-admin.php');
    //echo "<script> window.location.href = './add-admin.php' </script>";
   }
    
}

?>
<?php include('../menu/footer.php'); ?>