<?php require 'config.php' ?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
  $login =false;
  $err_msg ="";
  // --------------->
  if(isset($_POST['login']))
  {
    $username  = $_POST['name'];
    $pwd       = $_POST['password'];
    // $role      = $_POST['role'];
    // if($full_name != "" && $email != "" && $pwd != "" )
    // {
     $select = "SELECT * FROM user_details WHERE fullname ='$username' && password='$pwd'";
     $result = mysqli_query($conn,$select);
     $num  = mysqli_num_rows($result);
     
      if($num == 1){
          $row = mysqli_fetch_assoc($result);

          if($row['role']=='user'){
              $login=true;
              $_SESSION['username'] = $row['fullname'];
              header('location:home.php');
          }
          
        }
      
        else{
          $err_msg = 'incorrect email/password';
        }
      }

    // }
    
    // var_dump($_SESSION['admin_name'], $_SESSION['user_name']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <?php require 'nav.php' ?>
    <?php
    if ($err_msg) {
        echo "<script>alert('$err_msg');</script>";
    }
    ?>
   
    <div class="containerr">
    <h1>Login</h1>
<form class=" f1" method="POST">
  
  <div class="row">
    <label for="fullname">Username</label>
    <input type="text" name="name" autocomplete="off" placeholder="username">
  </div>
  <div class="row">
    <label for="password">Password</label>
    <input type="password" name="password">
  </div>
  <button id="button" type="submit" name ="login">Login</button>
   <p class="last">Don't have an Account?<a href="register.php">Register</a></p>
</form>
  </div>

  </body>
  <?php include 'footer.php'; ?>
</html>
