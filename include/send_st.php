<?php
$LicensePlate = $_POST['lplate'];
$SeasonTicketID = $_POST['sticket'];
$EntryDate = $_POST['Entry-date'];

require 'db.php';

$send = "insert into parking.parkingst (LicensePlate, SeasonTicketID, EntryDate) values ('$LicensePlate', '$SeasonTicketID', '$EntryDate')";

if($conn->query($send)) {
    header('Location: ../welcome.php');
}

else
{
    
    echo $conn->error;
}
$conn->close();