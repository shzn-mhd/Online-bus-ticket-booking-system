<?php include('../menu/menu.php'); ?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<div class="main">
    
        <h2>Change Password</h2>
        <br>
    
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
                ?>
    
        <form method="POST">
            <table class="tbl-2" >
                <tr>   
                    <td>User Name</td>
                    <td><input type="text" name="userName"></td>
                </tr>
                <tr>   
                    <td>Old Password</td>
                    <td><input type="password" name="oldPassword"></td>
                </tr>
                <tr>   
                    <td>New Password</td>
                    <td><input type="password" name="newPassword"></td>
                </tr>
                <tr>   
                    <td>Conform Password</td>
                    <td><input type="password" name="confPassword"></td>
                </tr>
                <tr>   
                    <td colspan="2"><input type="submit" name="submit" value="Change" class="btn-second"></td>
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
    $userName=$_POST['userName'];
    $oldPassword=md5($_POST['oldPassword']);
    $newPassword=md5($_POST['newPassword']);
    $confPassword=md5($_POST['confPassword']);

    $sql="SELECT * from admin where userName='$userName';";
    $res=mysqli_query($conn,$sql);
    
    $row=mysqli_fetch_assoc($res);
    if($res)
    {
        
        $password=$row['password'];
        if($oldPassword==$password){
            if($oldPassword==$newPassword){
                //session variables for display msg
                $_SESSION['change']="<p class='error'>New Password and Conform Password Don't Match!</p>";
                    
                //redirect page
                //header('location:'.'./manage-bus.php');
                echo "<script> window.location.href = './change-pw-admin.php' </script>";

            }else{
                if($newPassword==$confPassword){
                    
                    $sql2="UPDATE admin set password='$confPassword';";
                    $res2=mysqli_query($conn,$sql2);
                    if($res2==true) //check sql succsses
                    {
                        //session variables for display msg
                        $_SESSION['change']="<p class='success'>Password Change successfully</p>";

                        //redirect page
                        //header('location:'.'./manage-bus.php');
                        echo "<script> window.location.href = './settings.php' </script>";
                    }
                    else
                    {
                        //session variables for display msg
                        $_SESSION['change']="<p class='error'>Password Change is Faild</p>";

                        //redirect page
                        //header('location:'.'./add-bus.php');
                        echo "<script> window.location.href = './change-pw-admin.php' </script>";
                    }

                }else{
                    //session variables for display msg
                    $_SESSION['change']="<p class='error'>New Password and Conform Password Don't Match!</p>";
    
                    //redirect page
                    //header('location:'.'./manage-bus.php');
                    echo "<script> window.location.href = '././change-pw-admin.php' </script>";
                }
            }

        }else{
            //session variables for display msg
            $_SESSION['change']="<p class='error'>User Name Or Password Incorrect!</p>";

            //redirect page
            //header('location:'.'./manage-bus.php');
            echo "<script> window.location.href = './change-pw-admin.php' </script>";
        }

    }
    else
    {
         //session variables for display msg
         $_SESSION['change']="<p class='error'>User Name Incorrect!</p>";

         //redirect page
         //header('location:'.'./manage-bus.php');
         echo "<script> window.location.href = './change-pw-admin.php' </script>";
    }

}

?>
<?php include('../menu/footer.php'); ?>