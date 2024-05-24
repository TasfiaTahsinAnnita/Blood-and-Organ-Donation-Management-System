<?php
include 'conn.php';

if (isset($_POST['submit'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $blood = mysqli_real_escape_string($conn, $_POST['blood']);
    $organ= mysqli_real_escape_string($conn, $_POST['organ']);
    $reason = mysqli_real_escape_string($conn, $_POST['reason']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);

    $sql = "INSERT INTO organ_donations (donor_name, donor_blood_group, donatable_organ, donation_reason, contact_number, donor_address, amount_demanded)
            VALUES ('$fullname', '$blood','$organ', '$reason', '$contact', '$address', '$amount')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data Saved Successfully.'); window.location = 'donate_organ.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
