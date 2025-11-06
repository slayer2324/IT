<?php
function calculateAverage(...$marks) {
    $average = array_sum($marks) / count($marks);
    return round($average, 2);
}

echo "Average: " . calculateAverage(80, 90, 70, 85, 95);
?>
