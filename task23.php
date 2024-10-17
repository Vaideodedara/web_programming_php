<?php
function findLargest($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}


if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
        $largest = findLargest($num1, $num2, $num3);
        echo "The largest number from $num1, $num2, and $num3 is $largest.";
    } else {
        echo "Please enter valid numbers.";
    }
} else {
    echo '<form method="post" action="">
            Enter three numbers:<br>
            Number 1: <input type="number" name="num1" required><br>
            Number 2: <input type="number" name="num2" required><br>
            Number 3: <input type="number" name="num3" required><br>
            <input type="submit" value="Find Largest">
          </form>';
}
?>
