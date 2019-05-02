<?php

require 'static/constants.php';

// Create connection
$conn = new mysqli(servername, username, password, dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_cmd = "SELECT * FROM destination";
$result = $conn->query($sql_cmd);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["destinationId"] . " - locationName: " . $row["locationName"] . " " . $row["countryName"] . "<br>";
    }
} else {
    echo "0 results";
}


$conn->close();


?>