<?php require 'config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php require 'nav.php' ?>
    
    <div class="container">
    <h1>Create Account</h1>
<form action="#" method="POST">
    <div class="row">
    <label for="name">Name</label>
    <input type="fullname" name="fullname" autocomplete="off" placeholder="Full Name" required>
  </div>
  <div class="row">
    <label for="email">Email</label>
    <input type="email" name="email" autocomplete="off" placeholder="email@example.com" required>
  </div>
  <div class="row">
    <label for="password">Password</label>
    <input type="password" name="password" required>
  </div>
  <!-- <div class ="row"> -->
  <!-- <label for="role">Role</label>
    <select name="role" id="option"> -->
        <!-- <option value="user">user</option> -->
        <!-- <option value="admin">admin</option> -->
    <!-- </select -->
<!-- </div> -->
  <button id="button" type="submit" name= "register">Register</button>
   <p class="last">Already have an Account?<a href="login.php">Login</a></p>
</form>
  </div>
  </body>
  <?php include 'footer.php'; ?>
</html>

<?php
if (isset($_POST['register'])) {
    $full_name = $_POST['fullname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    
    
    if ($full_name != "" && $email != "" && $pwd != "") {
        $select = "SELECT * FROM user_details WHERE email='$email'";
        $result = mysqli_query($conn, $select);
     
        if (mysqli_num_rows($result) > 0) {
            $error[] = 'User already exists!';
        } else {
            $query = "INSERT INTO user_details (fullname, email, password,role) VALUES('$full_name','$email','$pwd','user')";
            $data = mysqli_query($conn, $query);

            if ($data) {
                // echo "Data inserted into database";
                header('location: login.php');
                // exit(); // Stop further execution
            } else {
                echo "Failed to insert data";
            }
        }
    } else {
        echo "Please fill the required details";
    }
}
?>
