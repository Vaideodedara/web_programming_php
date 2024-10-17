<?php
function factorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}


if (isset($_POST['number'])) {
    $number = (int)$_POST['number'];
    $result = factorial($number);
    echo "The factorial of $number is $result.";
} else {
    echo '<form method="post" action="">
            Enter a non-negative integer: <input type="number" name="number" min="0" required>
            <input type="submit" value="Calculate Factorial">
          </form>';
}
?>
