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
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>

  <p><?
  // Update the fat content value
  $nutrition["fat"] = 12;
  
  // Add a new element (fiber) to the array
  $nutrition["fiber"] = 8;
  
  // Display the updated values of $nutrition
  echo "Updated Nutrition (per 100g):<br>";
  foreach ($nutrition as $component => $amount) {
      echo ucfirst($component) . ": " . $amount . "%<br>";
  }
  
  ?></p>

</body>

</html>