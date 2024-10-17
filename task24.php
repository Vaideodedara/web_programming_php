<?php
function calculateSquareRoot($number) {
    if ($number < 0) {
        return "Square root is not defined for negative numbers.";
    }
    return sqrt($number);
}


if (isset($_POST['number'])) {
    $number = $_POST['number'];
    if (is_numeric($number)) {
        $squareRoot = calculateSquareRoot($number);
        echo "The square root of $number is " . round($squareRoot, 2) . ".";
    } else {
        echo "Please enter a valid number.";
    }
} else {
    echo '<form method="post" action="">
            Enter a number: <input type="number" name="number" step="0.01" required>
            <input type="submit" value="Calculate Square Root">
          </form>';
}
?>
