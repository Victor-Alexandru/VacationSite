<?php
require 'constants.php';

if (isset($_POST["targetId"], $_POST["targetName"], $_POST["destinationId"])) {


    // Create connection
    $conn = new mysqli(servername, username, password, dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql_cmd = "SELECT * FROM `target` WHERE targetId =  " . $_POST["targetId"];
    $result = $conn->query($sql_cmd);
    if ($result->num_rows == 1) {
        $sql_cmd = "UPDATE `target` SET `targetName` = '" . $_POST["targetName"] . "', `destinationId` = '" . $_POST["destinationId"] . "' WHERE `target`.`targetId` = " . $_POST["targetId"] . ";";
        $conn->query($sql_cmd);
        echo "<p class='text-success'>You updated successfully</p>";

    } else {
        $sql_cmd = "INSERT INTO `target` (`targetId`, `targetName`, `destinationId`) VALUES ('" . $_POST["targetId"] . "', '" . $_POST["targetName"] . "', '" . $_POST["destinationId"] . "');";
        $conn->query($sql_cmd);
        echo "<p class='text-success'>You added successfully</p>";
    }
    $conn->close();

}

