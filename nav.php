
<?php  
    session_start();
  
?>
<nav class="navbar bg-is-dark txt-is-white">
<div class="container">

  
  <div class="navbar-brand txt-is-linki">
    <a class="navbar-item" style="font-size:2.5rem; font-weight: bold; padding-right:100px;" href="home.php">FoodyVibes</a>
  </div>

 
  <div class="navbar-menu">

  <?php if(isset($_SESSION['username'])) { ?>
    <div class="navbar-start">
      <ul class="navbar-item txt-is-link">
        <li><a class="navbar-link" href="home.php">Home</a></li>
        <li><a class="navbar-link" href="menu.php">Menu</a></li>
        <li><a class="navbar-link " href="about.php">About</a></li>
        <div class="dropdown">
        <li><a class="navbar-link dropbtn">Order</a>
        <div class="dropdown-content">
                <a href="cart.php">Cart</a>
                <a href="track.php">Track Order</a>
            </div>
        </li>
        </div>
      </ul>
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-login" href="logout.php">Logout</a>
        </div>
      </div>
    </div>

    <?php } else {?>
      <div class="navbar-start">
      <ul class="navbar-item txt-is-link">
        <li><a class="navbar-link" href="home.php">Home</a></li>
        <li><a class="navbar-link" href="menu.php">Menu</a></li>
        <li><a class="navbar-link " href="about.php">About</a></li>
        
      </ul>
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
        <a class="button is-signup" href="register.php">Sign Up</a>
          <a class="button is-login" href="login.php">Login</a>
        </div>
      </div>
    </div>

    <?php } ?>

    

  </div>
  

</div>
</nav>