 <?php
	$hoursWorked = $_POST['hours-worked'];
    $hourlyRate = $_POST['hourly-rate'];

	$pay = $hoursWorked * $hourlyRate
?>
<h3>Results:</h3>
Your pay is <?php echo "$hoursWorked" ?> 
Your pay is <?php echo "$hourlyRate" ?>
Your pay is <?php echo "$pay" ?>