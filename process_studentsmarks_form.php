<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$maths=$_POST['maths'];



if ($maths >= 70) {
    $grade = 'A';
} elseif ($maths >= 60) {
    $grade = 'B';
} elseif ($maths >= 50) {
    $grade = 'C';
} elseif ($maths >= 40) {
    $grade = 'D';
} else {
    $grade = 'FAIL';
}

// Display results
echo "<p>Name: $fname</p>";
echo "<p>Name: $lname</p>";
echo "<p>Maths: $maths</p>";
echo "<p>Grade: $grade</p>";


?>