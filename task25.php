<?php

function swapNumbers(&$num1, &$num2) {
    $num1 = $num1 + $num2; 
    $num2 = $num1 - $num2; 
    $num1 = $num1 - $num2; 
}


if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (is_numeric($num1) && is_numeric($num2) ) {
        swapNumbers($num1, $num2);
        echo "After swapping: Number 1 is $num1 and Number 2 is $num2.";
    } else {
        echo "Please enter valid numbers.";
    }
} else {
    echo '<form method="post" action="">
            Enter two numbers:<br>
            Number 1: <input type="number" name="num1" required><br>
            Number 2: <input type="number" name="num2" required><br>
            <input type="submit" value="Swap Numbers">
          </form>';
}
?>
