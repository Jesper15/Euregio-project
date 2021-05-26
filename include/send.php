<?php
$LicensePlate = $_POST['licenseplate'];
$SeasonTicketID = $_POST['seasonticket'];

require 'db.php';

$send = "insert into parking (licenseplate, seasonticket) values ('$LicensePlate', '$SeasonTicketID')";