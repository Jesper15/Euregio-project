<?php

//Defining the variables of the form and database

$LicensePlate = $_POST['lplate'];
$SeasonTicketID = $_POST['sticket'];
$EntryDate = $_POST['Entry-date'];

require 'db.php';

//Insert into the database

$send = "insert into parking.parking (LicensePlate, SeasonTicketID, EntryDate) values ('$LicensePlate', '$SeasonTicketID', '$EntryDate')";

//Check if the credentials are right. Or else, give an error

if($conn->query($send)) {
    header('Location: ../index.php');
}

else
{
    
    echo $conn->error;
}
$conn->close();