<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">

    <?php



    /* 
			 Step 1:  Use the Echo Function to say hello with html h1 tags embedded inside php

		   Step 2: Write a comment above the echo function and explain
		   what that function is doing.  */

       
           // Step 1: Use the Echo Function to say hello with html h1 tags embedded inside php
           echo "<h1>Hello!</h1>";
       
           // Step 2: Write a comment above the echo function and explain

           /* what that function is doing.
            The Echo function is used to output one or more strings.
            In this case, it is outputting the string "<h1>Hello!</h1>" which is an html h1 tag.
            The h1 tag is used to define the largest heading in an html document.
            The Echo function is used in php to output data to the web page. */
       
           ?>
       
         </article>
         <!--MAIN CONTENT-->
       
         <?php include "includes/footer.php"; ?> 

    ?>




  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>