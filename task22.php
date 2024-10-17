<?php
function calculateArea($radius) {
    
    return pi() * pow($radius, 2);
}


if (isset($_POST['radius'])) {
    $radius = $_POST['radius'];
    if (is_numeric($radius) && $radius >= 0) {
        $area = calculateArea($radius);
        echo "The area of the circle with radius $radius is " . round($area, 2) . ".";
    } else {
        echo "Please enter a valid non-negative number for the radius.";
    }
} else {
    echo '<form method="post" action="">
            Enter the radius of the circle: <input type="number" name="radius" min="0" step="0.01" required>
            <input type="submit" value="Calculate Area">
          </form>';
}
?>
