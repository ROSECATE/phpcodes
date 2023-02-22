<!DOCTYPE html>
<html>
<head>
	<title>Mathematics Results</title>
</head>
<body><center>
	<h1>Mathematics Results</h1>
	<?php
    $marks = $_POST['marks'];

				if($marks >= 0 && $marks < 40) {
					echo "<p>Your Grade: Fail</p>";
				  } 
                elseif($marks >= 40 && $marks <= 49) {
					echo "<p>Your Grade: D</p>";
				  } 
                elseif($marks >= 50 && $marks <= 59) {
					echo "<p>Your Grade: C</p>";
				  } 
                elseif($marks >= 60 && $marks <= 69) {
					echo "<p>Your Grade: B</p>";
				   } 
                elseif($marks >= 70 && $marks <= 100) {
					echo "<p>Your Grade: A</p>";
				} 
                else {
					echo "<p>Invalid marks, kindly try again.</p>";
				}
	?>
    </center>

</body>
</html>