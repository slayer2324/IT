<!-- Write a PHP program that accepts a student’s marks and prints the grade according to the following rules using if…elseif…else 
90–100: A 
75–89: B 
60–74: C
 40–59: D
  Below 40: Fail -->


  <?php
$marks = 76;

if ($marks >= 90 && $marks <= 100) {
    echo "Grade: A";
} elseif ($marks >= 75 && $marks < 90) {
    echo "Grade: B";
} elseif ($marks >= 60 && $marks < 75) {
    echo "Grade: C";
} elseif ($marks >= 40 && $marks < 60) {
    echo "Grade: D";
} else {
    echo "Fail";
}
?>
