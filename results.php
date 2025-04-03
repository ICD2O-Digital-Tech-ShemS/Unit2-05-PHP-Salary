 <?php
	$hoursWorked = $_POST['hours Worked'];
    $hourlyRate = $_POST['hourly rate'];

	$pay = $hoursWorked * $hourlyRate
?>
<h3>Results:</h3>
Your pay is <?php echo "$pay" ?>