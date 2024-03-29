<?php

/* 
  Write you php code here

   */
  // Create an array of best-selling items
  $best_sellers = array(
      "Chocolate" => 10,
      "Mints" => 8,
      "Fudge" => 12,
      "Bubble gum" => 7,
      "Toffee" => 15,
      "Jelly Beans" => 11
  );
  ?>

<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>

  <?php
  // Sort the array in descending order based on the number of sales
  arsort($best_sellers);
  
  // Display the top three best-selling items
  echo "<h2>Top Three Best-Selling Items:</h2>";
  $count = 0;
  foreach ($best_sellers as $item => $sales) {
      if ($count >= 3) {
          break;
      }
      echo "<p>" . ($count + 1) . ". " . $item . " - " . $sales . " sales</p>";
      $count++;
  }
  
  ?>

</body>

</html>