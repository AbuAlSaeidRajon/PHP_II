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
        // Step1: Make a form that submits one value to POST super global
        // Create a form
        ?>
        <form action="user_input.php" method="post">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form>

    </article>
    <!--MAIN CONTENT-->

</section>

<?php
include "includes/footer.php";
?>

</body>
</html>