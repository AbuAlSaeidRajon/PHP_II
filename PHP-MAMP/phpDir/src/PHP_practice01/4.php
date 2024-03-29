<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation();?>

  </aside><!--SIDEBAR-->


  <article class="main-content col-xs-8">

    <?php

    // Step 1: Define a function and make it return a calculation of 2 numbers
    function calculateSum($num1, $num2) {
      return $num1 + $num2;
    }

    $sum = calculateSum(5, 10);
    echo "The sum of 5 and 10 is: $sum";

    // Step 2: Make a function that passes parameters and call it using parameter values
    function square($number) {
      return $number * $number;
    }

    $result = square(8);
    echo "The square of 8 is: $result";

    ?>

  </article><!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>