
<?php
echo "<h1>Operators in PHP</h1>";

/* -------- Part A Arithmetic Operators -------- */
echo "<h2>Part (a): Arithmetic Operators</h2>";

$a = 10;
$b = 3;

echo "a = $a, b = $b <br>";
echo "a + b = " . ($a + $b) . "<br>";   // it is Sum
echo "a - b = " . ($a - $b) . "<br>";   // it is Difference
echo "a * b = " . ($a * $b) . "<br>";   // it is  Product
echo "a / b = " . ($a / $b) . "<br>";   // it is Division
echo "a % b = " . ($a % $b) . "<br>";   // it is Modulus


/* -------- Part B  Assignment Operators -------- */
echo "<h2>Part (b): Assignment Operators</h2>";

$x = 5; 
echo "Initial value of x = $x <br>";

$x += 2; 
echo "After x += 2 → $x <br>";

$x -= 1; 
echo "After x -= 1 → $x <br>";

$x *= 4; 
echo "After x *= 4 → $x <br>";

$x /= 2;
echo "After x /= 2 → $x <br>";

$x %= 3; 
echo "After x %= 3 → $x <br>";


/* -------- Part C Logical Operators -------- */
echo "<h2>Part (c): Logical Operators</h2>";

$number = 8;
echo "Number = $number <br>";

//  between 1 and 100 AND even
if ($number >= 1 && $number <= 100 && $number % 2 == 0) {
    echo "$number is between 1 and 100 AND it is even.<br>";
}

// or
if ($number < 1 || $number > 100) {
    echo "$number is outside the range 1–100.<br>";
} else {
    echo "$number is inside the range 1–100.<br>";
}

// not
if (!($number % 2)) {
    echo "$number is even (checked using !).<br>";
} else {
    echo "$number is odd.<br>";
}
?>
