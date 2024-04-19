<?php
/*
Overall idea here is to set cookies and count the number of pages a visitor has viewed.

Step 1: Create a counter to store number of pages visitor has viewed. Create a cookie to hold 
that counter variable. 

Step 2: Increment the value of the counter, as the visitor has just viewed a page.

Step 3: Use a setcookie() function to tell the browser to create or update a cookie
and also store the value from the variable in that cookie

Step 4: A new variable should hold a message saying the number of pages the visitor has viewed.
e.g. "Page views: "
*/

// Step 1: Create a counter variable and initialize it to 0 if it doesn't exist in the cookie
$page_views = isset($_COOKIE['page_views']) ? $_COOKIE['page_views'] + 1 : 1;

// Step 2: Increment the counter for each page view
setcookie("page_views", $page_views, time() + (60 * 60 * 24 * 30)); // Cookie expires in 30 days

// Step 4: Create a message with the number of page views
$page_views_message = "Page views: " . $page_views;
?>

<?php include 'includes/header.php'; ?>

<p><a href="sessions.php">Refresh this page</a> to see the page views increase</p>
<p>
    <?php 
    echo $page_views_message; 
    ?>
    </p>

<?php include 'includes/footer.php'; ?>
