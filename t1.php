<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = '';

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Division by zero error!';
            }
            break;
        case 'exponent':
            $result = pow($num1, $num2);
            break;
        case 'percentage':
            $result = ($num1 / 100) * $num2;
            break;
        case 'sqrt':
            $result = sqrt($num1);
            break;
        case 'log':
            if ($num1 > 0) {
                $result = log($num1);
            } else {
                $result = 'Logarithm error!';
            }
            break;
        default:
            $result = 'Invalid operation';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <h1>Result: <?php echo $result; ?></h1>
        <a href="index.php">Go Back</a>
    </div>
</body>
</html>
