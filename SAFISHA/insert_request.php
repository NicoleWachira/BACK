<?php
// Include the database connection file
include 'connect.php';

// Start the session
session_start();


// Get the requestor's ID from the session
$requestor_id = $_SESSION['user_id'];

// Get the requestor's location and waste type from the form
$location = $_POST['Location']; // Assuming Location is the name of the input field for location
$wastetype = $_POST['Wastetype']; // Assuming Wastetype is the name of the input field for waste type

// Check if the request already exists in the request table
$sql_check = "SELECT * FROM request WHERE requestor_id=? AND Location=? AND Wastetype=?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("iss", $requestor_id, $location, $wastetype);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    // Request already exists, redirect back to requestor page
    header("Location: requestor.php");
    exit();
}

// Insert the data into the request table
$sql_insert = "INSERT INTO request (requestor_id, Location, Wastetype) VALUES (?, ?, ?)";
$stmt_insert = $conn->prepare($sql_insert);
$stmt_insert->bind_param("iss", $requestor_id, $location, $wastetype);
if ($stmt_insert->execute()) {
    // Redirect to requestor page after successful insertion
    header("Location: requestor.php");
    exit();
} else {
    echo "Error inserting request: " . $stmt_insert->error;
}

// Close prepared statements and database connection
$stmt_check->close();
$stmt_insert->close();
$conn->close();
?>
