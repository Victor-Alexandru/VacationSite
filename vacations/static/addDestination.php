<?php
require 'constants.php';

if (isset($_POST["id"], $_POST["locationName"], $_POST["countryName"], $_POST["costPerDay"])) {


    // Create connection
    $conn = new mysqli(servername, username, password, dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql_cmd = "SELECT * FROM `destination`  where destinationId = " . $_POST["id"];
    $result = $conn->query($sql_cmd);
    if ($result->num_rows == 1) {
        $sql_cmd = "UPDATE `destination` SET `locationName` = '" . $_POST["locationName"] . "', `countryName` = '" . $_POST["countryName"] . "', `description` = '" . $_POST["description"] . "', `costPerDay` = '" . $_POST["costPerDay"] . "' WHERE `destination`.`destinationId` = " . $_POST["id"] . ";";
        $conn->query($sql_cmd);
    } else {
        $sql_cmd = "INSERT INTO `destination` (`destinationId`, `locationName`, `countryName`, `description`, `costPerDay`) VALUES ('" . $_POST["id"] . "', '" . $_POST["locationName"] . "', '" . $_POST["countryName"] . "', '" . $_POST["description"] . "', '" . $_POST["costPerDay"] . "');";
        $conn->query($sql_cmd);
    }
    $conn->close();

}

