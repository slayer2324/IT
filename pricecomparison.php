<?php
$prices = [
    "Amazon" => 5000,
    "Flipkart" => 4500,
    "eBay" => 4800,
    "Snapdeal" => 5200
];

echo "<b>PRICE COMPARISON</b><br><br>";
foreach ($prices as $seller => $price) {
    echo "$seller: Rs. " . number_format($price) . "<br>";
}

$maxPrice = max($prices);
$minPrice = min($prices);
$avgPrice = array_sum($prices) / count($prices);

$highest = array_search($maxPrice, $prices);
$lowest = array_search($minPrice, $prices);
$savings = $maxPrice - $minPrice;

echo "<br><b>Statistics:</b><br>";
echo "Highest Price: Rs. $maxPrice ($highest)<br>";
echo "Lowest Price: Rs. $minPrice ($lowest)<br>";
echo "Average Price: Rs. $avgPrice<br>";
echo "Savings: Rs. $savings (if you buy from $lowest)<br>";

asort($prices);
echo "<br>Sorted by Price (Low to High):<br>";
foreach ($prices as $seller => $price) {
    echo "$seller: Rs. $price<br>";
}
?>
