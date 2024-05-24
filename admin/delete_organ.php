<?php
include 'conn.php';

$donation_id = $_GET['id']; // Get the donation ID from the URL

// SQL query to delete the record from the organ_donations table
$sql = "DELETE FROM organ_donations WHERE donation_id={$donation_id}";
$result = mysqli_query($conn, $sql);

// Redirect to organ_donor_list.php after deletion
header("Location: organ_donor_list.php");

// Close the database connection
mysqli_close($conn);
?>
