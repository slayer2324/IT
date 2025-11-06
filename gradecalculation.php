<?php
$marks = [
    "Internet Technology" => 85,
    "Data Structure" => 78,
    "Database" => 92,
    "Java Programming" => 88
];

echo "<b>MARK SHEET</b><br><br>";
$total = 0;
foreach ($marks as $subject => $mark) {
    echo "$subject: $mark<br>";
    $total += $mark;
}

$average = $total / count($marks);
$percentage = $average;

if ($percentage >= 80)
    $grade = "A";
elseif ($percentage >= 60)
    $grade = "B";
elseif ($percentage >= 40)
    $grade = "C";
else
    $grade = "F";

echo "<br>----------------------<br>";
echo "Total Marks: $total<br>";
echo "Average: $average<br>";
echo "Percentage: $percentage%<br>";
echo "Grade: $grade";
?>
