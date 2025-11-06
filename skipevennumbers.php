<!-- Print numbers from 1–20 but skip even numbers -->
<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        continue; // skips even numbers
    }
    echo $i . " ";
}
?>