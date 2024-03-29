<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation();?>

  </aside><!--SIDEBAR-->


  <article class="main-content col-xs-8">

    <?php

    // Step 1: Make an if Statement with elseif and else to finally display string saying, I love PHP

    $language = "PHP";

    if ($language == "Java") {
      echo "I love Java";
    } elseif ($language == "Python") {
      echo "I love Python";
    } elseif ($language == "Ruby") {
      echo "I love Ruby";
    } else {
      echo "I love PHP";
    }

    // Step 2: Make a forloop  that displays 10 numbers
    for ($i = 1; $i <= 10; $i++) {
      echo "$i <br>";
    }

    // Step 3 : Make a switch Statement that test againts one condition with 5 cases
    $day = "Monday";

    switch ($day) {
      case "Monday":
        echo "Today is Monday";
        break;
      case "Tuesday":
        echo "Today is Tuesday";
        break;
      case "Wednesday":
        echo "Today is Wednesday";
        break;
      case "Thursday":
        echo "Today is Thursday";
        break;
      case "Friday":
        echo "Today is Friday";
        break;
      default:
        echo "It's the weekend!";
    }

    ?>

  </article><!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>