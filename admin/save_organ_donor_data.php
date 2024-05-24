<?php
include 'conn.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate the inputs
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $blood_group = mysqli_real_escape_string($conn, $_POST['blood_group']);
    $donatable_organ = mysqli_real_escape_string($conn, $_POST['donatable_organ']);
    $reason = mysqli_real_escape_string($conn, $_POST['reason']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $amount_demanded = mysqli_real_escape_string($conn, $_POST['amount_demanded']);

    // Insert the data into the database
    $sql = "INSERT INTO organ_donations (donor_name, donor_blood_group, donatable_organ, donation_reason, contact_number, donor_address, amount_demanded) 
            VALUES ('$fullname', '$blood_group', '$donatable_organ', '$reason', '$contact_number', '$address', '$amount_demanded')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to the organ donor list page after successful insertion
        header("Location: organ_donor_list.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Redirect to the form if the script is accessed directly
    header("Location: add_organ_donor.php");
}
?>
