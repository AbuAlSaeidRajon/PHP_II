<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measurement Conversion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Measurement Conversion</h2>
        <form method="post">
            <div class="input-group">
                <label for="measurement_type">Select Measurement Type:</label>
                <select name="measurement_type" id="measurement_type" required>
                    <option value="temperature">Temperature</option>
                    <option value="speed">Speed</option>
                    <option value="mass">Mass</option>
                </select>
            </div>
            <div class="input-group">
                <label for="input_value">Enter Value:</label>
                <input type="number" name="input_value" id="input_value" required>
            </div>
            <button type="submit" name="convert">Convert</button>
        </form>

        <?php
        if (isset($_POST['convert'])) {
            $measurement_type = $_POST['measurement_type'];
            $input_value = $_POST['input_value'];

            switch ($measurement_type) {
                case 'temperature':
                    // Convert temperature
                    $fahrenheit = ($input_value * 9/5) + 32;
                    $kelvin = $input_value + 273.15;
                    echo "<div class='result'><h3>Temperature Conversion:</h3>";
                    echo "Fahrenheit: $fahrenheit °F<br>";
                    echo "Kelvin: $kelvin K</div>";
                    break;

                case 'speed':
                    // Convert speed
                    $meters_per_second = $input_value * 0.277778;
                    $knots = $input_value * 0.539957;
                    echo "<div class='result'><h3>Speed Conversion:</h3>";
                    echo "Meters per Second: $meters_per_second m/s<br>";
                    echo "Knots: $knots kn</div>";
                    break;

                case 'mass':
                    // Convert mass
                    $grams = $input_value * 1000;
                    $kilograms = $input_value / 1000;
                    echo "<div class='result'><h3>Mass Conversion:</h3>";
                    echo "Grams: $grams g<br>";
                    echo "Kilograms: $kilograms kg</div>";
                    break;

                default:
                    echo "<div class='result'>Invalid measurement type selected.</div>";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>
