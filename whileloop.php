<!-- 6. Find sum of first 10 natural numbers using while loop -->
 <?php
$sum = 0;
$i = 1;

while ($i <= 10) {
    $sum += $i;
    $i++;
}

echo "Sum of first 10 natural numbers: $sum";
?>