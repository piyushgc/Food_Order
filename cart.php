<?php require 'config.php' ?>
<?php

session_start();
error_reporting(E_ALL & ~E_NOTICE);

if(isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['name']) && isset($_GET['price'])) {
    $item = array(
        'name' => $_GET['name'],
        'price' => floatval($_GET['price']),
        'quantity' => 1
    );

    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    array_push($_SESSION['cart'], $item);
}


if(isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['index'])) {
    $index = $_GET['index'];
    if(isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}


if(isset($_GET['action']) && $_GET['action'] == 'update' && isset($_GET['index']) && isset($_GET['quantity'])) {
    $index = $_GET['index'];
    $quantity = $_GET['quantity'];
    if(isset($_SESSION['cart'][$index])) {
        $_SESSION['cart'][$index]['quantity'] = $quantity;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    
    <title>Cart</title>
</head>
<body>
<?php include 'nav.php'; ?>
    <h1>Cart</h1>
    <ul id="cart-items">
        <?php
        if(isset($_SESSION['cart'])) {
            $serial = 1;
            foreach($_SESSION['cart'] as $index => $item) {
                echo "<li>{$serial}. {$item['name']} - $ {$item['price']} ";
                echo "<input type='number' min='1' value='{$item['quantity']}' onchange=\"updateQuantity(this.value, {$index})\"> ";
                echo "<a href='?action=remove&index={$index}'>Remove</a></li>";
                $serial++;
            }
        }
        ?>
    </ul>
    <p class="p1">Total: $<span id="cart-total">
        <?php
        if(isset($_SESSION['cart'])) {
            $total = 0;
            foreach($_SESSION['cart'] as $item) {
                $total += $item['price'] * $item['quantity']; 
            }
            echo $total;
        }
        ?>
    </span></p>
    <?php if(isset($_SESSION['username'])) { ?>
    <form action="" method="POST">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br><br>
        <button id="button" type="submit" name= "check">Checkout</button>
    </form>
    <?php } else {?>
        <p>Please <a href="login.php">Login</a>to proceed checkout.</p>
        <?php } ?>
    <script>
        function updateQuantity(quantity, index) {
            window.location.href = `?action=update&index=${index}&quantity=${quantity}`;
        }
    </script>

<?php include 'footer.php'; ?>
</body>
</html>
<?php
if (isset($_POST['check'])) {
    $ph = $_POST['phone'];
    $ad = $_POST['address'];
   
    $query = "INSERT INTO details (phone, address) VALUES('$ph','$ad')";
    $data = mysqli_query($conn, $query);

    if ($data) {
        // echo "Data inserted into database";
        header('location: order_confirmation.php');
        // exit(); // Stop further execution
    } else {
        echo "Failed to insert data";
    }
}
?>
