<?php

/* 
  Write you php code here

   */

// Create and store array in a variable called $nutrition
$nutrition = array(
    "fat" => 15,    
    "sugar" => 20,  
    "salt" => 2    
);

?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>

  <?php
  // Display the contents of Nutrition (per 100G) in percentage
  echo "Nutrition (per 100g):<br>";
  foreach ($nutrition as $component => $amount) {
      echo ucfirst($component) . ": " . $amount . "%<br>";
  }

  ?>

</body>

</html>