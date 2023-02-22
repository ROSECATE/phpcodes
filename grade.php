
	<?php

		// Retrieve data from POST request
		$name = $_POST['name'];
		$maths = $_POST['maths'];
		

		

		// Determine grade based on average
		if ($maths >= 0 && $maths < 40) {
			echo "<p>Your Grade: Fail</p>";
		} elseif ($maths >= 40 && $maths <= 49) {
			echo "<p>Your Grade: D</p>";
		} elseif ($maths >= 50 && $maths <= 59) {
			echo "<p>Your Grade: C</p>";
		} elseif ($maths >= 60 && $maths <= 69) {
			echo "<p>Your Grade: B</p>";
		} elseif ($maths >= 70 && $maths <= 100) {
			echo "<p>Your Grade: A</p>";
		}
        else {
            echo "<p>Invalid marks, kindly try again.</p>";
        }

    

		// Display results
		echo "<center>";
		echo "<p>Name: $name</p>";
		 echo "<p>Maths Marks Entered : $maths</p>";
		 echo "</center>";
		
	?>
