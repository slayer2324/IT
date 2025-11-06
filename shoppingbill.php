<?php
$items = [
    ["name" => "Laptop", "price" => 75000],
    ["name" => "Mouse", "price" => 500],
    ["name" => "Keyboard", "price" => 1200]
];

echo "<b>SHOPPING BILL</b><br><br>";
$subtotal = 0;

foreach ($items as $item) {
    $price = number_format($item['price'], 2);
    echo "{$item['name']}: Rs. $price<br>";
    $subtotal += $item['price'];
}

$vat = $subtotal * 0.13;
$total = $subtotal + $vat;

echo "<br>--------------------------<br>";
echo "Subtotal: Rs. " . number_format($subtotal, 2) . "<br>";
echo "VAT (13%): Rs. " . number_format($vat, 2) . "<br>";
echo "--------------------------<br>";
echo "TOTAL: Rs. " . number_format($total, 2);
?>
