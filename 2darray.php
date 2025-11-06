<!-- 5. 2D Array – Student Info -->
 <?php
$students = [
    ["name" => "Ram", "age" => 20, "faculty" => "BCA"],
    ["name" => "Sita", "age" => 19, "faculty" => "BIT"],
    ["name" => "Hari", "age" => 21, "faculty" => "BCA"]
];

foreach ($students as $index => $student) {
    echo "Student " . ($index + 1) . ": {$student['name']}, Age: {$student['age']}, Faculty: {$student['faculty']}<br>";
}
?>
