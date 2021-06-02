<?php
$LicensePlate = $_POST['licenseplate'];
$SeasonTicketID = $_POST['seasonticket'];

require 'db.php';

$send = "insert into parking.parking (LicensePlate, SeasonTicketID) values ('$LicensePlate', '$SeasonTicketID')";

if($conn->query($send)) {
    header('Location: ../forms.php');

}
else
{
    echo "er is iets foutgegaan" . $conn->error;
}
$conn->close();
