<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <h2>Simple Calculator</h2>
        <form method="post">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select>
            <button type="submit" name="calculate">Calculate</button>
        </form>
        <div class="result">
            <?php
            if(isset($_POST['calculate'])) {
                require_once 'Calculator.php';
                $calculator = new Calculator($_POST['num1'], $_POST['num2']);
                $operation = $_POST['operation'];
                switch ($operation) {
                    case 'add':
                        echo "Result: " . $calculator->add();
                        break;
                    case 'subtract':
                        echo "Result: " . $calculator->subtract();
                        break;
                    case 'multiply':
                        echo "Result: " . $calculator->multiply();
                        break;
                    case 'divide':
                        echo "Result: " . $calculator->divide();
                        break;
                    default:
                        echo "Invalid operation";
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
