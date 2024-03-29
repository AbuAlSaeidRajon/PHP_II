<?php

/* 
  Write you php code here

   */
// Define offers array with associated arrays for each item
$offers = array(
  array(
      "name" => "Chocolate Bar",
      "price" => 1.50,
      "stock" => 20
  ),
  array(
      "name" => "Gummy Bears",
      "price" => 2.00,
      "stock" => 15
  ),
  array(
      "name" => "Lollipop",
      "price" => 0.75,
      "stock" => 30
  )
);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>

  <?
  // Print out the name and price of all the products
echo "Products on Offer:<br>";
foreach ($offers as $product) {
    echo "Name: " . $product["name"] . ", Offer Price: $" . number_format($product["price"], 2) . "<br>";
}

?>

</body>

</html>