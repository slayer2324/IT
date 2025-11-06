<!-- 10. Simple Calculator -->
 <?php
$num1 = 15.567;
$num2 = 7.234;

$num1 = round($num1, 2);
$num2 = round($num2, 2);

echo "Addition: $num1 + $num2 = " . round($num1 + $num2, 2) . "<br>";
echo "Subtraction: $num1 - $num2 = " . round(abs($num1 - $num2), 2) . "<br>";
echo "Multiplication: $num1 × $num2 = " . round($num1 * $num2, 2) . "<br>";
echo "Division: $num1 ÷ $num2 = " . round($num1 / $num2, 2);
?>
