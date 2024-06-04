<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
<?php include 'nav.php'; ?>
<section class="hero">
         <div class="slide">
            <div class="content">
               <span>order online</span>
               <h3>delicious Food</h3>
               <a href="menu.php" class="btn">see menu</a>
            </div>
            <div class="image">
               <img src="image/img-1.png" alt="">
            </div>
          </div>

</section>


<section class="category" style="position: relative; background-image: url('image/food-1024x683.jpg'); background-size: cover; background-position: center; height: 200px;
    width: 85%;">

   <!-- Pseudo-element for white mist and blur effect -->
   <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.5); filter: blur(10px);"></div>

   <h1 class="title" style="color: white;">Food Category</h1>

   <div class="box-container">

      <a href="menu.php" class="box" style="background-color: #your_default_color;">
         <img src="image/cat-1.png" alt="">
         <h3>fast food</h3>
      </a>

      <a href="menu.php" class="box" style="background-color: #your_default_color;">
         <img src="image/cat-2.png" alt="">
         <h3>main dishes</h3>
      </a>

      <a href="menu.php" class="box" style="background-color: #your_default_color;">
         <img src="image/cat-3.png" alt="">
         <h3>drinks</h3>
      </a>

      <a href="menu.php" class="box" style="background-color: #your_default_color;">
         <img src="image/cat-4.png" alt="">
         <h3>desserts</h3>
      </a>

   </div>

</section>

<?php include 'footer.php'; ?>
    
</body>
</html>