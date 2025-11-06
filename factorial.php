<!-- Factorial of a Number using do-while loop -->
<?php
$num = 5;  
$fact = 1;  
$i = 1;

do {
    $fact *= $i;
    $i++;
} while ($i <= $num);

echo "Factorial of $num is: $fact";
?>