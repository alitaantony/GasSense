<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gassense";

$api_key_value = "tPmAT5Ab3j7F9";

$api_key = $sensor = $value1 = $Sstatus = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "api_key" field is present in the POST data
    if (isset($_POST["api_key"])) {
        $api_key = test_input($_POST["api_key"]);
        if ($api_key == $api_key_value) {
            // Extract other POST data
            $sensor = isset($_POST["sensor"]) ? test_input($_POST["sensor"]) : "";
            $value1 = isset($_POST["value1"]) ? test_input($_POST["value1"]) : "";
            $Sstatus = isset($_POST["Sstatus"]) ? test_input($_POST["Sstatus"]) : "";

            // Create connection to the database
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare and execute SQL query to insert data into database
            $sql = "INSERT INTO SensorData (sensor, value1, Sstatus) VALUES ('$sensor', '$value1', '$Sstatus')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // Close database connection
            $conn->close();
        } else {
            echo "Wrong API Key provided.";
        }
    } else {
        echo "No API Key provided.";
    }
} else {
    echo "No data posted with HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
