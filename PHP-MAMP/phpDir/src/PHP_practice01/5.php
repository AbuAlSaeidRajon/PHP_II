<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php 


/* Step1: Use a pre-built math function here and echo it */
    echo sqrt(16); 
    // sqrt is a pre-built math function that returns the square root of a number


    // Step 2: Use a pre-built string function here and echo it
    $str = "Hello World!";
    echo strlen($str); 
    // strlen is a pre-built string function that returns the length of a string


    // Step 3: Use a pre-built Array function here and echo it
    $arr = array(1, 2, 3, 4, 5);
    echo count($arr); 
    // count is a pre-built array function that returns the number of elements in an array

    ?>

  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>