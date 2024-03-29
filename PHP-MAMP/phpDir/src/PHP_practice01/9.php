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

    // Step 1: Create a link that sets some GET parameters
    echo "<a href='page.php?param1=value1&param2=value2'>Click Here</a>";

    // Step 2: Set a cookie that expires in one week
    setcookie("my_cookie", "My Cookie Value", time() + (60 * 60 * 24 * 7));

    // Step 3: Start a session and set it to a value
    session_start();
    $_SESSION["session_var"] = "Session Value";
    ?>

</body>

</html>