<?php
/*

Step 1: Store the value sent for a cookie for color
(or null if it was not sent)

*/
$color = isset($_POST['color']) ? $_POST['color'] : null;

/*

Step 2: Create an array to hold permitted options e.g. light, dark

*/
$permittedOptions = ['light', 'dark'];

/*

Step 3: Check if the form has been submitted. You may use $_SERVER['REQUEST_METHOD]

*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Step 4: Now use setcookie() function to set a cookie on color variable. Its value is the option
    // that user selected from the select box. It also:
    //   - expires in one hour
    //   - is sent to all pages of the site
    //   - Gets sent via HTTP or HTTPS
    //   - is hidden from JavaScript

    $cookieValue = in_array($color, $permittedOptions) ? $color : 'dark';
    setcookie("color_preference", $cookieValue, time() + (60 * 60), '/', '', isset($_SERVER['HTTPS']), true);
}

// Get the current color preference from the cookie, if it exists
$currentColorPreference = isset($_COOKIE['color_preference']) ? $_COOKIE['color_preference'] : null;
?>

<?php include 'includes/header-style-switcher.php'; ?>
<form method="POST" action="cookie-preferences.php">
  Select color scheme:
  <select name="color">
    <option value="dark" <?php if ($currentColorPreference === 'dark') echo 'selected'; ?>>Dark</option>
    <option value="light" <?php if ($currentColorPreference === 'light') echo 'selected'; ?>>Light</option>
  </select><br>
  <input type="submit" value="Save">
</form>
<?php include 'includes/footer.php'; ?>
