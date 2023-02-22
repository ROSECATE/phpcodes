<?php
$principal=$_POST["principal"];
$rate=14/100;
$time=48/12;

$interest=$principal*$rate*$time;
$total=$principal+$interest;

echo"Principal Amount is: <b> KSH" .$principal. "</b> <br> <br>";
echo "Rate: "  .$rate. "  Per Annum <br><br>";
echo "Duration: "  .$time. " Years <br><br>";

echo"Loan interest Is: <b>KSH" .$interest. "</b> <br><br>";
echo"Total Loan Amount is: <b>KSH" .$total. "</b> <br>";
?>


