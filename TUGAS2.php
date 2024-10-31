<?php
$rows = 5; // Number of rows

for ($i = $rows; $i >= 1; $i--) {
    // Print spaces to center-align the stars
    echo str_repeat("&nbsp;", ($rows - $i) * 2);
    // Print stars
    echo str_repeat("*", 2 * $i - 1);
    echo "<br>";
}
?>
