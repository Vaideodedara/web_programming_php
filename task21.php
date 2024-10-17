<?php
function isPalindrome($number) {
    
    $numStr = strval($number);
    
    $reversedStr = strrev($numStr);
    
    return $numStr === $reversedStr;
}


if (isset($_POST['number'])) {
    $number = $_POST['number'];
    if (is_numeric($number) && $number >= 0) {
        $result = isPalindrome($number) ? "is a palindrome." : "is not a palindrome.";
        echo "The number $number $result";
    } else {
        echo "Please enter a valid non-negative integer.";
    }
} else {
    echo '<form method="post" action="">
            Enter a non-negative integer: <input type="number" name="number" min="0" required>
            <input type="submit" value="Check Palindrome">
          </form>';
}
?>
