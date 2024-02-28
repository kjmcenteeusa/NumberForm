<!-- Number Form -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Number Form</title>
</head>
<body >
		<h2>Number Form</h2>
		<h3>Type in a number and we will square it for you!</h3>
		<?php
			$displayForm = true;
			$number = "";


			/* Check to see if the form was submitted yet. */

			if(isset($_POST["Submit"])) {
				$number = $_POST["data"];
				
				/* Now that we know that the form was submitted, let's see if they entered a number or not/ */

				if(is_numeric($number)) {
					$displayForm = false;

				} else {
					echo "<p style='color: red;'>You need to enter a numeric value!</p>";
					$displayForm = true;

				} // End of nested IF/ELSE

			} // End of IF statement.

			/* Decide if ther form needs to be displayed in the document */

			if($displayForm){
				/* If that variable is true,
				   build out the html form in the
				   document */
			?>
			<form name="numberForm" action="numberForm.php" method="post">
				<label for="data">Enter a number:</label>
				<input type="text" name="data" id="data" value="<?php echo $number; ?>" />
				<br/>
				<p><input type="reset" value="Clear Form" />&nbsp; &nbsp; <input type="submit" name="Submit" value="Send Form"/></p>

			</form>
			<?php

			} else {
				echo "<p>Thank you for entering a number!</p>";
				echo "<p>Your number, $number squared is: ", 
				($number * $number), ".<p>";
				echo "<p><a href='numberForm.php'>Try Again?</a></p>";
				} // end of IF/ELSE

		?>
	
</body>
</html>