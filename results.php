<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $hoursWorked = isset($_POST['hours_worked']) ? $_POST['hours_worked'];
    $hourlyRate = isset($_POST['hourly_rate']) ? $_POST['hourly_rate'];
    
    // Perform the calculation for the pay
    if (is_numeric($hoursWorked) & is_numeric($hourlyRate)) {
        $pay = $hoursWorked * $hourlyRate;
    } else {
        $pay = 0;
    }
} else {
    $pay = 0;
    echo "<p>No data submitted yet.</p>";
}
?>

<!-- Display the results -->
<h2>Calculated Pay:</h2>
<p>Your total pay for <?php echo htmlspecialchars($hoursWorked); ?> hours at $<?php echo htmlspecialchars($hourlyRate); ?> per hour is: $<?php echo number_format($pay, 2); ?>.</p>

<a href="index.php">Go back</a>