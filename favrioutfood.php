<!-- 1. Indexed Array – Favorite Foods -->
 <?php
$foods = ["Pizza", "Momo", "Burger", "Pasta", "Ice Cream"];

echo "My Favorite Foods:<br>";
$i = 1;
foreach ($foods as $food) {
    echo "$i. $food<br>";
    $i++;
}
?>
