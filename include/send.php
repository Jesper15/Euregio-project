<?php
$LicensePlate = $_POST['lplate'];
$EntryDate = $_POST['Entry-date'];

require 'db.php';

$send = "insert into parking.parking (LicensePlate, EntryDate) values ('$LicensePlate', '$EntryDate')";

if($conn->query($send)) {
    header('Location: ../welcome.php');
}

else
{

    echo $conn->error;
}
$conn->close();