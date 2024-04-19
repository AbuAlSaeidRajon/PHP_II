<?php
// Step 2: Start session
session_start();

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session  variables are set.";

// Step 1: Set a cookie that expires in one week
$exp = time() + (60 * 60 * 24 * 7);
setcookie("TheCookieName", "This is the cookie value", $exp);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    include "functions.php";
    include "includes/header.php"; 
    ?>

    <section class="content">
        <aside class="col-xs-4">
            <?php Navigation(); ?>
        </aside>

        <article class="main-content col-xs-8">
        <?php
        // Create a link that sets some GET parameters
        echo '<a href="https://www.w3schools.com/php/php_sessions.asp">Click Here</a> <br>';

        // Echo session variables that were set on the start of this coding.......
        echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
        ?>
        </article>    

    </section>

    <?php include "includes/footer.php"; ?>

</body>
</html>
