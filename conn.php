<?php
$conn = mysqli_connect("localhost", "root", "", "Blood_Organ_donation");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
