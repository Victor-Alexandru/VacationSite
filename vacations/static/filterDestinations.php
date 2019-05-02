<?php
require 'constants.php';
if (isset($_POST["start"], $_POST["end"], $_POST["countryName"])) {
    $start_index = $_POST["start"];

    $end_index = $_POST["end"];

    // Create connection
    $conn = new mysqli(servername, username, password, dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql_cmd = "SELECT * FROM `destination` WHERE  countryName = '" . $_POST["countryName"] . "' ORDER BY destinationId  LIMIT " . $start_index . "," . "4";

    $sql_cmd2 = "SELECT * FROM `destination` WHERE  countryName = '" . $_POST["countryName"] . "'   ORDER BY destinationId  LIMIT " . $end_index . "," . "4";

    $result = $conn->query($sql_cmd);

    $result2 = $conn->query($sql_cmd2);

    ?>
    <?php


    $jsonData = array();

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $jsonDataItem = array();
        $jsonDataItem['destinationId'] = $row['destinationId'];
        $jsonDataItem['locationName'] = $row['locationName'];
        $jsonDataItem['countryName'] = $row['countryName'];
        $jsonDataItem['description'] = $row['description'];
        $jsonDataItem['costPerDay'] = $row['costPerDay'];

        array_push($jsonData, $jsonDataItem);

    }

    while ($row = $result2->fetch_assoc()) {
        $jsonDataItem = array();
        $jsonDataItem['destinationId'] = $row['destinationId'];
        $jsonDataItem['locationName'] = $row['locationName'];
        $jsonDataItem['countryName'] = $row['countryName'];
        $jsonDataItem['description'] = $row['description'];
        $jsonDataItem['costPerDay'] = $row['costPerDay'];

        array_push($jsonData, $jsonDataItem);

    }
    echo json_encode($jsonData);

    ?>

    <?php


    $conn->close();
}