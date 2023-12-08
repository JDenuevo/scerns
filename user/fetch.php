<?php
include '../conn.php';

$tab = isset($_GET['tab']) ? $_GET['tab'] : 'Medic';

// Define the table names
$reportTable = 'scerns_reports';
$statusTable = 'scerns_status';
$email = $_SESSION['email'];
// Fetch data based on the selected tab
$sql = "SELECT r.id, r.address, s.respondent_name, r.date, r.email
        FROM $reportTable r
        JOIN $statusTable s ON r.id = s.id
        WHERE r.type_of_emergency = '$tab' and r.email = '$email'  and r.status = 'Done'";
    
$result = mysqli_query($conn, $sql);

if (!$result) {
    // If there's an error with the query execution, display the error
    die('Error in executing the SQL query: ' . mysqli_error($conn));
}

// Process the results
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Close the result set
mysqli_free_result($result);


// Close the connection (optional, as it will be automatically closed when the script ends)
// mysqli_close($conn); // Commented out as this line is not needed here
?>
