<?php
$birthdate = "2000-05-15";
$birth = new DateTime($birthdate);
$today = new DateTime();

$age = $today->diff($birth)->y;

echo "Birthdate: " . date("F d, Y", strtotime($birthdate)) . "<br>";
echo "Current Date: " . date("F d, Y") . "<br>";
echo "Age: $age years old";
?>
