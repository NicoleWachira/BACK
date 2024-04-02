<?php
include 'connect.php';

// Check if the request type is 'Pickup'
if (isset($_POST['requesttype']) && $_POST['requesttype'] === 'Pickup') {
    // Fetch the requestor's ID, location, and waste type from the request table
    $sql = "SELECT requestor_id, Location, Wastetype FROM request";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $requestor_id = $row["requestor_id"];
            $location = $row["Location"];
            $waste_type = $row["Wastetype"];

            // Assign a collector_id and recycler_id (you can implement your logic here)
            $collector_id = 1; // Replace with your logic to assign a collector
            $recycler_id = 1; // Replace with your logic to assign a recycling company

            // Insert the data into the collections table
            $sql = "INSERT INTO collections (requestor_id, collector_id, recycler_id, location, waste_type) VALUES ($requestor_id, $collector_id, $recycler_id, '$location', '$waste_type')";
            if ($conn->query($sql) === TRUE) {
                // Request accepted and inserted into collections table
                echo "Collection request accepted and recorded.";
            } else {
                echo "Error inserting collection: " . $conn->error;
            }
        }
    } else {
        echo "No requests found.";
    }
}

$conn->close();
?>