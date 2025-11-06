<!-- Display numbers 1–20, skip even numbers using continue -->
<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        continue; // skips even numbers
    }
    echo $i . " ";
}
?>