<?php
// Initial name variable
$name = "Guest";
// Update name variable
$name = "Md Saeid";

// Candy prices
$candyStore = array(
    "chocolate_bar" => 1.50,
    "lollipop" => 0.75,
    "caramel" => 1.25
);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>

  <p><?php



// Display the updated name
echo "Welcome, $name!<br><br>";
echo "Here are the prices of each candy in the store:<br>";

// Display candy prices
foreach ($candyStore as $candy => $price) {
    echo ucfirst(str_replace("_", " ", $candy)) . ": $" . number_format($price, 2) . "<br>";
}

?></p>


</body>

</html>