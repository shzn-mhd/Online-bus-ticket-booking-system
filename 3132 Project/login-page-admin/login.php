<?php 
session_start();
 //connection to the database
 $conn = mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select=mysqli_select_db($conn,'easy_booking') or die(mysqli_error());//select database
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page Admin</title>
  <link rel="stylesheet" href="./login.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Sign in</p>
    <p class="error" align="center">
      <?php
        if(isset($_SESSION['log']))
        {
          echo $_SESSION['log'];
          unset($_SESSION['log']);
        }
      ?>
    </p>
    <form class="form1" method="POST">
      <input class="un " name="username" type="text" align="center" placeholder="Username">
      <input class="pass" name="password" type="password" align="center" placeholder="Password">
      <input type="submit" name="submit" value="submit"  class="submit">
      <p  align="center"><a href="#" class="forgot">Forgot Password?</a></p>
            
    </form>         
  </div>
     
</body>

</html>
<?php
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=md5($_POST['password']);

  $sql="SELECT * FROM admin WHERE userName='$username' AND password='$password' ";

  $res = mysqli_query($conn,$sql);

  //count the row
  $count= mysqli_num_rows($res);

  if($count==1)
  {
    $_SESSION['log']="<p class='success'>Login Successfully!</p>";
    //rederect
    header('location:'.'../Dashboard-admin/');
  }
  else
  {
    $_SESSION['log'] = "Username or Password did not Match!";
    header('location:'.'login.php');
  }

}
?>