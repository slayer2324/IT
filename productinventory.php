<!-- 6. Product Inventory -->
 <?php
$inventory = [
    ["id" => 101, "name" => "Laptop", "price" => 75000, "stock" => 10],
    ["id" => 102, "name" => "Mouse", "price" => 500, "stock" => 50],
    ["id" => 103, "name" => "Keyboard", "price" => 1200, "stock" => 0],
    ["id" => 104, "name" => "Monitor", "price" => 25000, "stock" => 5]
];

echo "<b>PRODUCT INVENTORY</b><br><br>";
echo "ID | Name | Price | Stock<br>-----------------------------<br>";

$totalValue = 0;
$outOfStock = [];
$lowStock = [];

foreach ($inventory as $item) {
    echo "{$item['id']} | {$item['name']} | {$item['price']} | {$item['stock']}<br>";
    $totalValue += $item['price'] * $item['stock'];

    if ($item['stock'] == 0)
        $outOfStock[] = $item;
    elseif ($item['stock'] < 10)
        $lowStock[] = $item;
}

echo "<br>OUT OF STOCK:<br>";
foreach ($outOfStock as $item)
    echo "- {$item['name']} (ID: {$item['id']})<br>";

echo "<br>LOW STOCK:<br>";
foreach ($lowStock as $item)
    echo "- {$item['name']} (ID: {$item['id']}) - Only {$item['stock']} units left<br>";

echo "<br>Total Inventory Value: Rs. $totalValue";
?>
