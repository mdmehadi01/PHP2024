<?php
// Define the total number of properties
$total_properties = 746;

// Database connection parameters
$servername = "localhost"; // Assuming the database is hosted locally
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "demo1";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize a counter
$counter = 1;

// Iterate over each property
for ($i = 1; $i <= $total_properties; $i++) {
    // Generate the property ID
    $property_id = "PROP" . str_pad($counter, 4, "0", STR_PAD_LEFT);

    // SQL insertion statement
    $sql = "INSERT INTO _property (property_id) VALUES ('$property_id')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully. Property ID: " . $property_id . "<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Increment the counter
    $counter++;
}

// Close the database connection
$conn->close();
