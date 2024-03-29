<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative */
		  

				// Step 1:
				$number1 = 10;
				$number2 = 20;
			
				// Step 2:
				$sum = $number1 + $number2;
				echo "The sum of $number1 and $number2 is: $sum";
			
				// Step 3:
				// Regular array
				$regularArray = array(1, 2, 3, 4, 5);
			
				// Associative array
				$associativeArray = array(
				  "one" => 1,
				  "two" => 2,
				  "three" => 3,
				  "four" => 4,
				  "five" => 5
				);
			
				?>


	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>