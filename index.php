<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="5">
    <title>Sensor Data</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 16px;
            text-align: center;
        }

        h1 {
            color: #ff7f00;
            font-family: 'Arial Black', Gadget, sans-serif;
            font-size: 28px;
            text-decoration: underline;
            text-shadow: 2px 2px 4px #000000;
        }

        table {
            margin: 20px auto;
            width: 90%;
            border-collapse: collapse;
            border: 2px solid #ffa94d;
        }

        th, td {
            padding: 15px;
            border: 1px solid #ffa94d;
            background-color: #ffc078;
            color: #fff;
            font-weight: bold;
            font-family: 'Arial', 'Helvetica Neue', Helvetica, sans-serif;
        }

        tbody tr:nth-child(even) {
            background-color: #2c2c2c;
        }
    </style>
</head>
<body>

<h1>SENSOR DATA</h1>

<table>
    <thead>
        <tr> 
            <th>ID</th> 
            <th>Date & Time</th> 
            <th>Sensor</th> 
            <th>Gas Value</th>    
            <th>Status</th>     
        </tr>
    </thead>
    <tbody>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gassense";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, reading_time, sensor, value1, Sstatus FROM sensordata ORDER BY id DESC"; /*select items to display from the sensordata table in the database*/

    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $row_id = $row["id"];
            $row_reading_time = $row["reading_time"];
            $row_sensor = $row["sensor"];
            $row_value1 = $row["value1"];
            $row_Sstatus = $row["Sstatus"];
                 
            echo '<tr> 
                    <td>' . $row_id . '</td> 
                    <td>' . $row_reading_time . '</td> 
                    <td>' . $row_sensor . '</td> 
                    <td>' . $row_value1 . '</td> 
                    <td>' . $row_Sstatus . '</td> 
                  </tr>';
        }
        $result->free();
    }

    $conn->close();
    ?>
    </tbody>
</table>

</body>
</html>
