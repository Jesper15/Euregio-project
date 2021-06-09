<?php
$LicensePlate = $_POST['lplate'];
$SeasonTicketID = $_POST['sticket'];

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
