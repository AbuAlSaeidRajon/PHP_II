<!DOCTYPE html>
<html lang="en">

<?php
include "functions.php";
include "includes/header.php";
?>

<section class="content">

    <aside class="col-xs-4">
        <?php Navigation(); ?>
    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">

        <?php

        // Step 1 - Make a variable with some text as a value
        $text = "This is some secret text.";

        // Step 2 - Use crypt() function to encrypt it
        $encrypted_text = crypt($text);

        // Step 3 - Assign the crypt result to a variable

        // Step 4 - Output the variable
        echo "original text: " . $text . "<br>";
        echo "encrypted text: " . $encrypted_text;

        ?>

    </article>
    <!--MAIN CONTENT-->

</section>

<?php
include "includes/footer.php";
?>

</body>
</html>