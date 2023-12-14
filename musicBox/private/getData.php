<!-- Author 1: Lei Zhao 041086365 -->
<!-- Author 2: Zhicheng He 041086226 -->
<!-- Author 3: Yuling Guo 041069402 -->
<!-- Author 4: Yu Song 040873597 -->
<!-- Section: CST8285_301 -->
<!-- Professor: Shehzeen Shehzeen -->
<!-- File name: getData.php -->
<!-- Date: Jul. 23, 2023 -->
<!-- Description: getData.php -->
<?php

$server_name = "localhost";
$database_name = "assignment2";
$user_name = "test";
$user_password = "test";

$connection = new mysqli($server_name, $user_name, $user_password, $database_name) or die($connection->connect_error);

// Prepare the SQL query
$sql = "SELECT * FROM track";

// Execute the query
$result = $connection->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Error: " . $connection->error);
}

// Fetch the data from the query result
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Convert the data to JSON format
//$trackData = json_encode($data);
// Send the JSON data to JavaScript
//echo "<script>const trackData = $trackData;</script>";
echo "const trackData = " . json_encode($data) . ";";
// Close the database connection
$connection->close();
?>