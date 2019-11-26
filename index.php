<?php
require_once "Aadhaar.class.php";
$aadhaar = new Aadhaar();
$chk=1;

$aadhaarNumberValid = "Your valid aadhaar number";
$aadhaarNumberInValid = "Your invalid aadhaar number";

$adharValid = $aadhaar->check_adhar($aadhaarNumberValid);
$adharInValid = $aadhaar->check_adhar($aadhaarNumberInValid);

if ($adharValid)
	echo "Valid Aadhaar" . "\n";

if (!$adharInValid)
	echo "InValid Aadhaar" . "\n";
?>