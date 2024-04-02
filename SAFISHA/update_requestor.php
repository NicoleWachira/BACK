<?php
session_start();
include "connect.php";

// Check if the user is logged in and has the "requestor" role
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'requestor') {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user details from the database
$sql = "SELECT Fullname, Location, Wastetype FROM user INNER JOIN requestor ON user.id = requestor.requestor_id WHERE user.id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fullname = $row['Fullname'];
    $location = $row['Location'];
    $wastetype = $row['Wastetype'];
} else {
    echo "Error fetching user details";
}

// Update user details if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updated_fullname = $_POST['Fullname'];
    $updated_location = $_POST['Location'];
    $updated_wastetype = $_POST['Wastetype'];

    // Update user details in the user table
    $sql = "UPDATE user SET Fullname = '$updated_fullname' WHERE id = $user_id";
    $conn->query($sql);

    // Update requestor details in the requestor table
    $sql = "UPDATE requestor SET Location = '$updated_location', Wastetype = '$updated_wastetype' WHERE requestor_id = $user_id";
    $conn->query($sql);

    header("Location: requestor_profile.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Requestor Details</title>
    <link rel="stylesheet" href="User profile.css">
</head>
<body>
    <div class="user-profile-container">
        <h1>Update Requestor Details</h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="profile-details">
                <label for="Fullname"><strong>Full Name:</strong></label>
                <input type="text" name="Fullname" value="<?php echo $fullname; ?>" required>
                <label for="Location"><strong>Location:</strong></label>
                <input type="text" name="Location" value="<?php echo $location; ?>" required>
                <label for="Wastetype"><strong>Waste Type:</strong></label>
                <input type="text" name="Wastetype" value="<?php echo $wastetype; ?>" required>
            </div>
            <div class="button-group">
                <button type="submit">Update</button>
                <a href="requestor_profile.php"><button type="button">Cancel</button></a>
            </div>
        </form>
    </div>
</body>
</html>