<?php
include ('connect.php');
session_start();

// Check if the user is logged in as an admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: Login.php");
    exit();
}

// Handle user deletion
if (isset($_POST['delete_user'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM user WHERE id = $id";
    if (!mysqli_query($conn, $sql)) {
        echo "Error deleting user: " . mysqli_error($conn);
        exit();
    }
}

// Retrieve requests data
$sql = "SELECT * FROM requests";
$requests_result = mysqli_query($conn, $sql);
if (!$requests_result) {
    echo "Error retrieving requests data: " . mysqli_error($conn);
    exit();
}

// Retrieve users data
$sql = "SELECT * FROM user WHERE role != 'admin'";
$users_result = mysqli_query($conn, $sql);
if (!$users_result) {
    echo "Error retrieving users data: " . mysqli_error($conn);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_dashboard.css">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Admin Dashboard</h1>

    <h2>Requests</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Request Type</th>
                <th>Pickup</th>
                <th>Location</th>
                <th>Wastetype</th>
                <th>Collector ID</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($request=mysqli_fetch_assoc($requests_result)) { ?>
                <tr>
                    <td><?php echo $request['id']; ?></td>
                    <td><?php echo $request['request_type']; ?></td>
                    <td><?php echo $request['Pickup']; ?></td>
                    <td><?php echo $request['location']; ?></td>
                    <td><?php echo $request['waste_type']; ?></td>
                    <td><?php echo $request['collector_id']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h2>Users</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($user = mysqli_fetch_assoc($users_result)) { ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['Fullname']; ?></td>
                    <td><?php echo $user['Email']; ?></td>
                    <td><?php echo $user['Phonenumber']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td>
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                            <button type="submit" name="delete_user" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="logout.php" class="btn btn-primary">Logout</a>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
