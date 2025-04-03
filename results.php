 <?php
	$hoursWorked = $_POST['hours-worked'];
    $hourlyRate = $_POST['hourly-rate'];

	$pay = $hoursWorked * $hourlyRate
?>
<?php echo
<h3>Results:</h3>
Your hoursWorked is . $hoursWorked. <br> 
Your hourlyRate is . $hourlyRate. <br> 
Your pay is . $pay . "." ?>