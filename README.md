vehicle-registration
====================

PHP Class that can determine which era, year and location of a Vehicle Registration. Currently it verifies UK Vehicle Registrations, however the plan is to extend it in the future.

Warning: The classes contain an EXTREME number of Regular Expressions, I apologise profusely :)

Example usage
=============

<?php
// Instantiate Class
$verifyRegistration = new VehicleRegistration();
// Verify specified registration
$verifyRegistration->verifyRegistration('EX12 CFG');

// If no error, proceeed
$error = $verifyRegistration->getErrorMessage();
if ($error === false)  {
    // Display the period from when the Vehicle was registered
    echo 'Period: ' . $verifyRegistration->getPeriod();

    // Display any specific information about the vehicle registration
    $metaData = $verifyRegistration->getMetaData();
    if ($metaData->isException()) {
        echo 'Exception Details: ' . $metaData->getException();
    }

    // Display the location of where the vehicle was registered
    if ($metaData->locationKnown()) {
        echo 'Location of Registration: ' . $metaData->getLocation();
    }

    // Display the dates that the vehicle was most likely registered between
    if ($metaData->datesKnown()) {
        echo 'Car registered between: "' . $metaData->getStartDate() . '"" and "' . $metaData->getEndDate() . '"';
    }

} else {
    // Display the error that occurred
    echo "Error: {$error}";
} ?>