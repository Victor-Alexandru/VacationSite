<?php
require 'constants.php';

if (isset($_POST["targetId"])) {


    // Create connection
    $conn = new mysqli(servername, username, password, dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql_cmd = "SELECT * FROM `target`  where targetId = " . $_POST["targetId"];
    $result = $conn->query($sql_cmd);

    if ($result->num_rows == 0) {
        echo "<p class='text-danger'>No rows meant to be deleted</p>";
    } else {
        $sql_cmd = "DELETE FROM `target` WHERE `target`.`targetId` = " . $_POST["targetId"];
        $conn->query($sql_cmd);
        echo "<p class='text-success'>Rows deleted succesfull</p>";

    }
    $conn->close();
}